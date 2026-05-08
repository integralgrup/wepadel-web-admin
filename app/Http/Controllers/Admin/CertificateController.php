<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\Language; // Assuming you have a Language model to fetch languages
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{

    public function index()
    {
        // code to list all certificates where lang is en
        $certificates = Certificate::where('lang', 'en')->get();
        //dd($certificates);
        $languages = Language::all(); // Assuming you have a Language model to fetch languages
        return view('admin.certificate.index', compact('certificates', 'languages'));
    }

    public function create()
    {
        // code to show create certificate form
        $languages = Language::all();
        return view('admin.certificate.create', compact('languages'));
    }

    public function store(Request $request)
    {
        // code to store new certificate

        //dd($request->all());

        if ($request->has('certificate_id')) {
                $certificate_id = $request->certificate_id; // Use the provided certificate_id
            }else{
                $certificate_id = Certificate::max('certificate_id') + 1; // Increment the maximum certificate_id by 1
                if (!$certificate_id) {
                    $certificate_id = 1; // If no certificate items exist, start with 1
                }
            }
        try {

             $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'url_' . $language->lang_code => 'required|max:255',
                        'pdf_file_' . $language->lang_code => 'required|mimes:pdf|max:2048',
                    ]);
                }
                // save image if it exists
                if ($request->hasFile('pdf_file_en') || $request->hasFile('pdf_file_' . $language->lang_code)) {
                    $tmpFilePath = createTmpFile($request, 'pdf_file_en', $languages[0]);
                    $fileName = moveFileCertificate($request,$language,'pdf_file_' . $language->lang_code, 'pdf_file_en', 'title_' . $language->lang_code, 'title_en', $language->certificate_folder, $tmpFilePath);
                    //dd($fileName);
                }else{
                    $fileName = $request->input('old_pdf_file_' . $language->lang_code, null); // Use old PDF file if no new PDF file is uploaded
                }

                Certificate::updateOrCreate(
                    ['certificate_id' => $certificate_id, 'lang' => $language->lang_code],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'url' => $request->input('url_' . $language->lang_code) ?? $request->input('url_en'),
                        'pdf_file' => $fileName
                    ]
                );

            }

            return redirect()->route('admin.certificate.index')->with('success', 'Marka başarıyla kaydedildi.');
        } catch (\Exception $e) {
            //return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
            dd($e);
        }
    }

    public function edit($id)
    {
        // code to show edit certificate form
        $certificates = Certificate::where('certificate_id', $id)->get();
        //dd($certificates);
        $languages = Language::all();

        return view('admin.certificate.edit', compact('certificates', 'languages'));
    }

    public function destroy($id)
    {
        // code to delete certificate
        Certificate::where('certificate_id', $id)->delete();
        //CertificateSlider::where('certificate_id', $id)->delete();
        return redirect()->route('admin.certificate.index')->with('success', 'Marka başarıyla silindi.');
    }

    // Additional methods for certificate slider1 can be added here if needed

    // For example, you can add methods for creating, updating, and deleting certificate sliders

    public function slider1Index($id)
    {
        // code to list all sliders for a specific certificate where lang is en use DB Facade
        $sliders = DB::table('certificate_slider_1')->where(['certificate_id' => $id, 'lang' => 'en'])->get();
        return view('admin.certificate.slider1.index', compact('sliders', 'id'));
    }

    // slider1 create method
    public function slider1Create($id)
    {
        $languages = Language::all();
        return view('admin.certificate.slider1.create', compact('id', 'languages'));
    }

    // slider1 store method
    public function slider1Store(Request $request, $id)
    {
        $languages = Language::all();

        //dd($request->all());

        try {

            if($request->has('slider_id')){
                $sliderId = $request->input('slider_id');
                // Update existing slider
            }else{
                // Select max id
                $sliderId = DB::table('certificate_slider_1')->where('certificate_id', $id)->max('id') + 1;
            }


            foreach ($languages as $language) {

                //Validation
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|string|max:255',
                        'title_1_' . $language->lang_code => 'required|string|max:255',
                        'description_' . $language->lang_code => 'required|string',
                        'alt_' . $language->lang_code => 'required|string|max:255',
                        'image_' . $language->lang_code => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    ]); 
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->certificate_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                //DB::table('certificate_slider_1') updateOrCreate
                $record = DB::table('certificate_slider_1')
                    ->where('slider_id', $sliderId)
                    ->where('lang', $language->lang_code)
                    ->first();

                if ($record) {
                    DB::table('certificate_slider_1')
                        ->where('slider_id', $sliderId)
                        ->where('lang', $language->lang_code)
                        ->update([
                            'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                            'title_1' => $request->input('title_1_' . $language->lang_code) ?? $request->input('title_1_en'),
                            'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                            'image' => $imageName,
                            'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        ]);
                } else {
                    DB::table('certificate_slider_1')->insert([
                        'slider_id' => $sliderId,
                        'lang' => $language->lang_code,
                        'certificate_id' => $id,
                        'slider_id' => $sliderId,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'title_1' => $request->input('title_1_' . $language->lang_code) ?? $request->input('title_1_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                    ]);
                }

            }

            return redirect()->route('admin.certificate.slider1.index', $id)->with('success', 'Slider başarıyla eklendi.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $th->getMessage()]);
        }

        
    }

    // Slider1 edit method
    public function slider1Edit($id, $sliderId)
    {
        $languages = Language::all();
        //get sliders array with the specified slider_id, I don't need first row
        $sliders = DB::table('certificate_slider_1')->where('slider_id', $sliderId)->get();

        return view('admin.certificate.slider1.edit', compact('sliders', 'id', 'sliderId', 'languages'));
    }


    // slider1 destroy
    public function slider1Destroy($id, $sliderId)
    {
        DB::table('certificate_slider_1')->where('id', $sliderId)->delete();
        return redirect()->route('admin.certificate.slider1.index', $id)->with('success', 'Slider başarıyla silindi.');
    }

    // Slider2 Index
    public function slider2Index($id)
    {
        // code to list all sliders for a specific certificate where lang is en use DB Facade
        $sliders = DB::table('certificate_slider_2')->where(['certificate_id' => $id, 'lang' => 'en'])->get();
        return view('admin.certificate.slider2.index', compact('sliders', 'id'));
    }

    // slider2 create method
    public function slider2Create($id)
    {
        $languages = Language::all();
        return view('admin.certificate.slider2.create', compact('id', 'languages'));
    }

    // slider2 store method
    public function slider2Store(Request $request, $id)
    {
        $languages = Language::all();

        //dd($request->all());

        try {

            if($request->has('slider_id')){
                $sliderId = $request->input('slider_id');
                // Update existing slider
            }else{
                // Select max id
                $sliderId = DB::table('certificate_slider_2')->where('certificate_id', $id)->max('id') + 1;
            }


            foreach ($languages as $language) {

                //Validation
                if($language->lang_code == 'en'){   
                    $request->validate([
                        'title_' . $language->lang_code => 'required|string|max:255',
                        'description_' . $language->lang_code => 'required|string|max:255',
                        'category_' . $language->lang_code => 'required|string|max:255',
                        'url_' . $language->lang_code => 'required|string|max:255',
                        'alt_' . $language->lang_code => 'required|string|max:255',
                        'image_' . $language->lang_code => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    ]); 
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->certificate_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                //DB::table('certificate_slider_2') updateOrCreate
                $record = DB::table('certificate_slider_2')
                    ->where('slider_id', $sliderId)
                    ->where('lang', $language->lang_code)
                    ->first();

                if ($record) {
                    DB::table('certificate_slider_2')
                        ->where('slider_id', $sliderId)
                        ->where('lang', $language->lang_code)
                        ->update([
                            'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                            'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                            'category' => $request->input('category_' . $language->lang_code) ?? $request->input('category_en'),
                            'url' => $request->input('url_' . $language->lang_code) ?? $request->input('url_en'),
                            'image' => $imageName,
                            'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        ]);
                } else {
                    DB::table('certificate_slider_2')->insert([
                        'slider_id' => $sliderId,
                        'lang' => $language->lang_code,
                        'certificate_id' => $id,
                        'slider_id' => $sliderId,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'category' => $request->input('category_' . $language->lang_code) ?? $request->input('category_en'),
                        'url' => $request->input('url_' . $language->lang_code) ?? $request->input('url_en'),
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                    ]);
                }

            }

            return redirect()->route('admin.certificate.slider2.index', $id)->with('success', 'Slider başarıyla eklendi.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $th->getMessage()]);
        }

        
    }

    // Slider2 edit method
    public function slider2Edit($id, $sliderId)
    {
        $languages = Language::all();
        //get sliders array with the specified slider_id, I don't need first row
        $sliders = DB::table('certificate_slider_2')->where('slider_id', $sliderId)->get();

        return view('admin.certificate.slider2.edit', compact('sliders', 'id', 'sliderId', 'languages'));
    }


    // slider2 destroy
    public function slider2Destroy($id, $sliderId)
    {
        DB::table('certificate_slider_2')->where('id', $sliderId)->delete();
        return redirect()->route('admin.certificate.slider2.index', $id)->with('success', 'Slider başarıyla silindi.');
    }

}
