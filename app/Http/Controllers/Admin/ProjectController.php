<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Product;
use App\Models\ProjectGallery;
use App\Models\Language; // Assuming you have a Language model to fetch languages
use App\Models\Country;
use Illuminate\Support\Facades\DB; // For database operations

class ProjectController extends Controller
{
    protected $languages;
    protected $products;
    protected $countries;

    public function __construct()
    {
        $this->languages = Language::all();
        $this->products = Product::all();
        $this->countries = Country::where('lang', 'en')->get();
        view()->share('languages', $this->languages);
        view()->share('products', $this->products);
        view()->share('countries', $this->countries);
    }
    // Display a list of projects
    public function index()
    {
        $projects = Project::where('lang', app()->getLocale())->get();
        return view('admin.project.index', compact('projects'));
    }

    // Show form to create a new project
    public function create()
    {
        
        return view('admin.project.create');
    }

    // Store new project in database
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->has('project_id')) {
                $project_id = $request->project_id; // Use the provided project_id
            }else{
                $project_id = Project::max('project_id') + 1; // Increment the maximum project_id by 1
                if (!$project_id) {
                    $project_id = 1; // If no project items exist, start with 1
                }
            }
        try {
            
            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'lang_'.$language->lang_code => 'required|string|max:10',
                        'title_1_'.$language->lang_code => 'required|string|max:100',
                        'title_2_'.$language->lang_code => 'nullable|string|max:100',
                        'short_description_'.$language->lang_code => 'nullable|string|max:500',
                        'description_'.$language->lang_code => 'required|string',
                        'seo_url_'.$language->lang_code => 'required|string|max:255',
                        'image_'.$language->lang_code => 'nullable|image',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'country_id_'.$language->lang_code => 'nullable|integer',
                        'seo_title_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_description_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_keywords_'.$language->lang_code => 'nullable|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->project_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                $usedProductsInput = $request->input('used_products_en');
                $usedProductsInput = implode(',', $usedProductsInput);

                $data = [
                    'lang' => $language->lang_code,
                    'title_1' => $request->input('title_1_'.$language->lang_code) ?? $request->input('title_1_en'),
                    'title_2' => $request->input('title_2_'.$language->lang_code) ?? $request->input('title_2_en'),
                    'short_description' => $request->input('short_description_'.$language->lang_code) ?? $request->input('short_description_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'seo_url' => $request->input('seo_url_'.$language->lang_code) ?? $request->input('seo_url_en'),
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'used_products' => $usedProductsInput,
                    'country_id' => $request->input('country_id_'.$language->lang_code) ?? $request->input('country_id_en'),
                    'seo_title' => $request->input('seo_title_'.$language->lang_code) ?? $request->input('seo_title_en'),
                    'seo_description' => $request->input('seo_description_'.$language->lang_code) ?? $request->input('seo_description_en'),
                    'seo_keywords' => $request->input('seo_keywords_'.$language->lang_code) ?? $request->input('seo_keywords_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? $request->input('sort_en') ?? 0,
                ];

                Project::updateOrCreate(
                    ['project_id' => $project_id, 'lang' => $language->lang_code],
                    $data
                );

                
            }

            return redirect()->route('admin.project.index')->with('success', 'Ürün başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.project.index')->with('error', 'Ürün kaydedilirken bir hata oluştu!');
        }
    }

    // Show form to edit project
    public function edit($id)
    {
        $languages = Language::all();
        $projects = Project::where('project_id', $id)->get();
        
        return view('admin.project.edit', compact('projects', 'languages'));
    }

   

    // Delete sector
    public function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('admin.sector.index')->with('success', 'Sector deleted successfully!');
    }


    // Project Gallery methods will go here
    public function galleryIndex($id)
    {
        $project = Project::where('project_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = ProjectGallery::where('project_id', $id)->where('lang', app()->getLocale())->get();
        return view('admin.project.gallery.index', compact('project', 'gallery'));
    }

    public function galleryCreate($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.gallery.create', compact('project'));
    }

    public function galleryStore(Request $request, $id)
    {
        try {
        
            $project = Project::where('project_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('project_gallery')->where('project_id', $id)->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific project
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this project, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->project_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'project_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                ProjectGallery::updateOrCreate(
                    ['project_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.project.gallery.index', $id)->with('success', 'Galeri görseli başarıyla kaydedildi!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.project.gallery.index', $id)->with('error', 'Galeri görseli eklenirken bir hata oluştu.');
        }
    }

    public function galleryEdit($id, $galleryId)
    {
        $project = Project::where('project_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = ProjectGallery::where('project_id', $id)->where('image_id', $galleryId)->get();
        return view('admin.project.gallery.edit', compact('project', 'gallery'));
    }

    

    public function galleryDestroy($id, $galleryId)
    {
        try {
            $gallery = ProjectGallery::findOrFail($galleryId);
            // Delete the image file from storage if needed
            // Storage::delete('path/to/image/' . $gallery->image);
            $gallery->delete();
            return redirect()->route('admin.project.galleries.index', $id)->with('success', 'Gallery image deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.project.galleries.index', $id)->with('error', 'An error occurred while deleting the gallery image.');
        }
    }

}
