<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Language;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    protected $languages;

    //constructor
    public function __construct()
    {
        //$this->middleware('auth');
        $this->languages = Language::all();
        view()->share('languages', $this->languages);
    }
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Here you would typically fetch data for the about page
        // For now, we will return a simple view
        // Fetch all about content where lang is 'en'
        $aboutContent = About::where('lang', 'en')->get(); // Adjust
        // the language as needed
        return view('admin.about.index', compact('aboutContent'));
    }

    // You can add more methods here for creating, editing, and deleting about content
    /**
     * Show the form for creating a new about content.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $languages = Language::all(); // Fetch all languages for the dropdown
        return view('admin.about.create', compact('languages'));    

    }

    /**
     * Store a newly created about content in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
    //dd($request->all());
        try {
            $languages = Language::all(); // Fetch all languages for the dropdown

                foreach ($languages as $language) {
                    // Validate the request data
                    if($language->lang_code == 'en'){
                        $request->validate([
                            'lang_' . $language->lang_code => 'required|string|max:10',
                            'title_' . $language->lang_code => 'required|string|max:100',
                            'title_1_' . $language->lang_code => 'required|string|max:255',
                            'description_' . $language->lang_code => 'required|string',
                            'image_' . $language->lang_code => 'nullable|image|max:2048',
                            'alt_' . $language->lang_code => 'required|string|max:255',
                            'mission_title_' . $language->lang_code => 'required|string|max:255',
                            'mission_text_' . $language->lang_code => 'required|string',
                            'mission_image_' . $language->lang_code => 'nullable|image|max:2048',
                            'vision_title_' . $language->lang_code => 'required|string|max:255',
                            'vision_text_' . $language->lang_code => 'required|string',
                            'vision_image_' . $language->lang_code => 'nullable|image|max:2048',
                            'seo_title_' . $language->lang_code => 'required|string|max:255',
                            'seo_description_' . $language->lang_code => 'required|string|max:255',
                            'seo_keywords_' . $language->lang_code => 'nullable|string|max:255',
                        ]);
                    }
                    // if request has file image_en but doesn't have image_<lang_code>
                    if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                        $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                        $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);
                        //dd($imageName);
                    }else{
                        $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                    }

                    if ($request->hasFile('mission_image_' . $language->lang_code) || $request->hasFile('mission_image_en')) {
                        $tmpMissionImagePath = createTmpFile($request, 'mission_image_' . $language->lang_code, $languages[0]);
                        $missionImageName = moveFile($request,$language,'mission_image_' . $language->lang_code, 'mission_image_en', 'mission_title_' . $language->lang_code, 'mission_title_en',$language->images_folder, $tmpMissionImagePath);
                    } else {
                        $missionImageName = $request->input('old_mission_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                    }

                    if ($request->hasFile('vision_image_' . $language->lang_code) || $request->hasFile('vision_image_en')) {
                        $tmpVisionImagePath = createTmpFile($request, 'vision_image_' . $language->lang_code, $languages[0]);
                        $visionImageName = moveFile($request,$language,'vision_image_' . $language->lang_code, 'vision_image_en', 'vision_title_' . $language->lang_code, 'vision_title_en',$language->images_folder, $tmpVisionImagePath);

                    } else {
                        $visionImageName = $request->input('old_vision_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                    }
                    // Create or update the about content for the specific language
                    About::updateOrCreate(
                        [
                            'lang' => $language->lang_code,
                        ],
                        [
                            'title' => $request->input('title_' . $language->lang_code) ?: $request->input('title_en'),
                            'title_1' => $request->input('title_1_' . $language->lang_code) ?: $request->input('title_1_en'),
                            'description' => $request->input('description_' . $language->lang_code) ?: $request->input('description_en'),
                            'image' => $imageName, // save relative path
                            'alt' => $request->input('alt_' . $language->lang_code) ?: $request->input('alt_en'),
                            'mission_title' => $request->input('mission_title_' . $language->lang_code) ?: $request->input('mission_title_en'),
                            'mission_text' => $request->input('mission_text_' . $language->lang_code) ?: $request->input('mission_text_en'),
                            'mission_image' => $missionImageName, // save relative path
                            'vision_title' => $request->input('vision_title_' . $language->lang_code) ?: $request->input('vision_title_en'),
                            'vision_text' => $request->input('vision_text_' . $language->lang_code) ?: $request->input('vision_text_en'),
                            'vision_image' => $visionImageName, // save relative path
                            'seo_title' => $request->input('seo_title_' . $language->lang_code) ?: $request->input('seo_title_en'),
                            'seo_description' => $request->input('seo_description_' . $language->lang_code) ?: $request->input('seo_description_en'),
                            'seo_keywords' => $request->input('seo_keywords_' . $language->lang_code) ?: $request->input('seo_keywords_en'),
                        ]
                    );

                }
                //die();
                @unlink($tmpImgPath);
                @unlink($tmpMissionImagePath);
                @unlink($tmpVisionImagePath);

            return redirect()->route('admin.about')->with('success', 'Hakkımızda içeriği başarıyla kaydedildi.');
        } catch (\Exception $e) {
            throw $e;
            //return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified about content.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $about_contents = About::all(); // Fetch all about contents
        $languages = Language::all(); // Fetch all languages for the dropdown
        //$aboutContent = About::where('id', $id)->first(); // Fetch the specific about content by ID
        return view('admin.about.edit', compact('about_contents', 'languages'));
    }

    /**
     * Update the specified about content in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function howWeDoIndex(Request $request)
    {
        // Fetch all "how we do" content
        $languages = Language::all(); // Fetch all languages for the dropdown
        // Fetch all "how we do" content from DB with group by content_id 
        $how_we_do = DB::table('about_how_we_do')
        //where('lang', $request->input('lang', 'en')) // Filter by language if provided
            ->where('lang', $request->input('lang', 'en')) // Filter by language if provided
            ->get();
        return view('admin.about.how_we_do.index', compact('languages','how_we_do'));
    }

    public function howWeDoCreate()
    {
        $languages = Language::all(); // Fetch all languages for the dropdown

        return view('admin.about.how_we_do.create', compact('languages'));
    }

    public function howWeDoStore(Request $request)
    {
        try {
            $languages = Language::all(); // Fetch all languages for the dropdown

            if ($request->has('content_id')) {
                $content_id = $request->input('content_id'); // Use the provided content_id
            } else {
                $content_id = DB::table('about_how_we_do')->max('content_id') + 1; // Increment the maximum content_id by 1
                if (!$content_id) {
                    $content_id = 1; // If no content exists, start with 1
                }   
            }

            foreach ($languages as $language) {
                // Validate the request data
                if ($language->lang_code === 'en') {
                    $request->validate([
                        'title_' . $language->lang_code => 'required|string|max:100',
                        'description_' . $language->lang_code => 'required|string',
                        'image_' . $language->lang_code => 'nullable|image|max:2048',
                        'icon_image_' . $language->lang_code => 'nullable|image|max:2048',
                        'alt_' . $language->lang_code => 'required|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request, $language, 'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);

                } else {
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('icon_image_' . $language->lang_code) || $request->hasFile('icon_image_en')) {
                    $tmpImgPath = createTmpFile($request, 'icon_image_en', $languages[0]);
                    $iconImageName = moveFile($request, $language, 'icon_image_' . $language->lang_code, 'icon_image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);

                } else {
                    $iconImageName = $request->input('old_icon_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                // Create or update the "how we do" content for the specific language
                DB::table('about_how_we_do')->updateOrInsert(
                    [
                        'lang' => $language->lang_code,
                        'content_id' => $content_id, // Use the content_id for grouping
                    ],
                    [
                        'content_id' => $content_id,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'image' => $imageName, // save relative path
                        'icon_image' => $iconImageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en'),
                    ]
                );
            }
            // unlink tmp image
            if (isset($tmpImgPath)) {
                @unlink($tmpImgPath);
            }
            
            return redirect()->route('admin.about.how_we_do')->with('success', 'Nasıl Yaparız içeriği başarıyla kaydedildi.');
        } catch (\Exception $e) {
            
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function howWeDoEdit($id)
    {
        $howWeDoContent = DB::table('about_how_we_do')->where('content_id', $id)->get(); // Fetch the specific "how we do" content by ID
        $languages = Language::all(); // Fetch all languages for the dropdown
        return view('admin.about.how_we_do.edit', compact('howWeDoContent', 'languages'));
    }

    // what we do methods

    public function whatWeDoIndex(Request $request)
    {
        $whatWeDoContent =  DB::table('about_what_we_do')
        //where('lang', $request->input('lang', 'en')) // Filter by language if provided
            ->where('lang', $request->input('lang', 'en')) // Filter by language if provided
            ->get();
        $languages = Language::all(); // Fetch all languages for the dropdown
        return view('admin.about.what_we_do.index', compact('whatWeDoContent', 'languages'));
    }

    public function whatWeDoCreate()
    {
        $languages = Language::all();
        return view('admin.about.what_we_do.create', compact('languages'));
    }

    public function whatWeDoStore(Request $request)
    {
        try {
            $languages = Language::all(); // Fetch all languages for the dropdown

            if ($request->has('content_id')) {
                $content_id = $request->input('content_id'); // Use the provided content_id
            } else {
                $content_id = DB::table('about_what_we_do')->max('content_id') + 1; // Increment the maximum content_id by 1
                if (!$content_id) {
                    $content_id = 1; // If no content exists, start with 1
                }   
            }

            foreach ($languages as $language) {
                // Validate the request data
                if ($language->lang_code === 'en') {
                    $request->validate([
                        'title_' . $language->lang_code => 'required|string|max:100',
                        'description_' . $language->lang_code => 'required|string',
                        'image_' . $language->lang_code => 'nullable|image|max:2048',
                        'alt_' . $language->lang_code => 'required|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_' . $language->lang_code) || $request->hasFile('image_en')) {
                    $tmpImgPath = createTmpFile($request, 'image_' . $language->lang_code, $languages[0]);
                    $imageName = moveFile($request, $language, 'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);
                } else {
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                // Create or update the "how we do" content for the specific language
                DB::table('about_what_we_do')->updateOrInsert(
                    [
                        'lang' => $language->lang_code,
                        'content_id' => $content_id, // Use the content_id for grouping
                    ],
                    [
                        'content_id' => $content_id,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'image' => $imageName, // save relative path
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en'),
                    ]
                );
            }
            return redirect()->route('admin.about.what_we_do')->with('success', 'Neler Yaparız içeriği başarıyla kaydedildi.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function whatWeDoEdit($id)
    {
        $whatWeDoContent = DB::table('about_what_we_do')->where('content_id', $id)->get();
        //dd($whatWeDoContent);
        $languages = Language::all();
        return view('admin.about.what_we_do.edit', compact('whatWeDoContent', 'languages'));
    }

    public function whatWeDoDestroy(Request $request, $id)
    {
        try {
            DB::table('about_what_we_do')->where('content_id', $id)->delete();
            return redirect()->route('admin.about.what_we_do')->with('success', 'Neler Yaparız içeriği başarıyla silindi.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function certificatesIndex(Request $request)
    {
        $certificatesContent = DB::table('about_certificates')
            ->where('lang', $request->input('lang', 'en')) // Filter by language if provided
            ->get();
        $languages = Language::all();
        return view('admin.about.certificates.index', compact('certificatesContent', 'languages'));
    }

    public function certificatesCreate()
    {
        $languages = Language::all();
        return view('admin.about.certificates.create', compact('languages'));
    }

    public function certificatesStore(Request $request)
    {
        try {

            $languages = Language::all(); // Fetch all languages for the dropdown

            if ($request->has('content_id')) {
                $content_id = $request->input('content_id'); // Use the provided content_id
            } else {
                $content_id = DB::table('about_certificates')->max('content_id') + 1; // Increment the maximum content_id by 1
                if (!$content_id) {
                    $content_id = 1; // If no content exists, start with 1
                }   
            }

            foreach ($languages as $language) {
                // Validate the request data
                if ($language->lang_code === 'en') {
                    $request->validate([
                        'title_' . $language->lang_code => 'required|string|max:100',
                        'image_' . $language->lang_code => 'nullable|image|max:2048',
                        'pdf_' . $language->lang_code => 'nullable|mimes:pdf|max:15120', // max 15MB
                        'alt_' . $language->lang_code => 'required|string|max:255',
                ]);
            }

                if ($request->hasFile('image_' . $language->lang_code) || $request->hasFile('image_en')) {
                    $tmpImgPath = createTmpFile($request, 'image_' . $language->lang_code, $languages[0]);
                    $imageName = moveFile($request, $language, 'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);

                } else {
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('pdf_' . $language->lang_code) || $request->hasFile('pdf_en')) {
                    $tmpPdfPath = createTmpFile($request, 'pdf_' . $language->lang_code, $languages[0]);
                    $pdfName = moveFile($request, $language, 'pdf_' . $language->lang_code, 'pdf_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpPdfPath);

                } else {
                    $pdfName = $request->input('old_pdf_' . $language->lang_code, null); // Use old PDF if no new PDF is uploaded
                }

                // Create or update the "how we do" content for the specific language
                DB::table('about_certificates')->updateOrInsert(
                    [
                        'lang' => $language->lang_code,
                        'content_id' => $content_id, // Use the content_id for grouping
                    ],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'image' => $imageName ?? '',
                        'pdf' => $pdfName ?? '',
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en') ?? 0,
                    ]
                );
            } // <-- Add this closing brace for the foreach loop
            // unlink tmp image
            if (isset($tmpImgPath)) {
                @unlink($tmpImgPath);
            }
            return redirect()->route('admin.about.certificates')->with('success', 'Sertifika içeriği başarıyla kaydedildi.');
        } catch (\Exception $e) {
            //throw $e;
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function certificatesEdit($id)
    {
        $certificatesContent = DB::table('about_certificates')->where('content_id', $id)->get();
        $languages = Language::all();
        return view('admin.about.certificates.edit', compact('certificatesContent', 'languages'));
    }

    public function certificatesDestroy(Request $request, $id)
    {
        try {
            DB::table('about_certificates')->where('content_id', $id)->delete();
            return redirect()->route('admin.about.certificates')->with('success', 'Sertifika içeriği başarıyla silindi.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function sliderIndex(Request $request)
    {
        $sliders =  DB::table('about_slider')
            ->where('lang', $request->input('lang', 'en')) // Filter by language if provided
            ->get();
        $languages = Language::all();
        return view('admin.about.slider.index', compact('sliders', 'languages'));
    }

    public function sliderCreate()
    {
        $languages = Language::all();
        return view('admin.about.slider.create', compact('languages'));
    }
    

    public function sliderStore(Request $request)
    {
        if ($request->has('slider_id')) {
            $slider_id = $request->slider_id; // Use the provided slider_id
        }else{
            $slider_id = DB::table('about_slider')->max('slider_id') + 1; // Increment the maximum slider_id by 1
            if (!$slider_id) {
                $slider_id = 1; // If no slider items exist, start with 1
            }
        }

        try {

            $languages = Language::all(); // Fetch all languages for the dropdown

            foreach ($languages as $language) {
                // Validate the request data
                if ($language->lang_code === 'en') {
                    $request->validate([
                        'image_' . $language->lang_code => 'nullable|image|max:2048',
                        'alt_' . $language->lang_code => 'required|string|max:255',
                ]);
            }

                if ($request->hasFile('image_' . $language->lang_code) || $request->hasFile('image_en')) {
                    $tmpImgPath = createTmpFile($request, 'image_' . $language->lang_code, $languages[0]);
                    $imageName = moveFile($request, $language, 'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);

                } else {
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                // Create or update the "how we do" content for the specific language
                DB::table('about_slider')->updateOrInsert(
                    [
                        'lang' => $language->lang_code,
                        'slider_id' => $slider_id, // Use the slider_id for grouping
                    ],
                    [
                        'image' => $imageName ?? '',
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en'),
                    ]
                );
            } // <-- Add this closing brace for the foreach loop
            // unlink tmp image
            if (isset($tmpImgPath)) {
                @unlink($tmpImgPath);
            }
            return redirect()->route('admin.about.slider')->with('success', 'Slider içeriği başarıyla kaydedildi.');
        } catch (\Exception $e) {
            //throw $e;
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function sliderEdit($id)
    {
        $sliders = DB::table('about_slider')->where('slider_id', $id)->get();
        return view('admin.about.slider.edit', compact('sliders'));
    }

    public function sliderDestroy($id)
    {
        $slider = DB::table('about_slider')->where('slider_id', $id)->first();
        if (!$slider) {
            return redirect()->route('admin.about.slider')->withErrors(['error' => 'Slider bulunamadı.']);
        }
        DB::table('about_slider')->where('slider_id', $id)->delete();
        return redirect()->route('admin.about.slider')->with('success', 'Slider başarıyla silindi.');
    }

    // AboutHome edit
    public function aboutHomeEdit()
    {
        $aboutHomeContent = DB::table('about_home')->get();
        //dd($aboutHomeContent);
        $languages = Language::all();
        return view('admin.about.about_home.edit', compact('aboutHomeContent', 'languages'));
    }

    public function aboutHomeStore(Request $request)
    {
        //dd($request->all());
        try {
            $languages = Language::all(); // Fetch all languages for the dropdown   
            foreach ($languages as $language) {
                // Validate the request data
                if($language->lang_code == 'en'){
                    $request->validate([
                        'lang_' . $language->lang_code => 'required|string|max:10',
                        'upper_title_' . $language->lang_code => 'required|string|max:100',
                        'title_' . $language->lang_code => 'required|string|max:100',
                        'title_1_' . $language->lang_code => 'required|string|max:255',
                        'description_' . $language->lang_code => 'required|string',
                        'button_text_' . $language->lang_code => 'required|string|max:50',
                        'button_url_' . $language->lang_code => 'required|string|max:255',
                        'image_' . $language->lang_code => 'nullable|image|max:2048',
                        'alt_' . $language->lang_code => 'required|string|max:255',
                    ]);
                }
                // if request has file image_en but doesn't have image_<lang_code>
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                // Create or update the about home content for the specific language
                DB::table('about_home')->updateOrInsert(
                    [
                        'lang' => $language->lang_code,
                    ],
                    [
                        'upper_title' => $request->input('upper_title_' . $language->lang_code) ?: $request->input('upper_title_en'),
                        'image' => $imageName, // save relative path
                        'alt' => $request->input('alt_' . $language->lang_code) ?: $request->input('alt_en'),
                        'button_text' => $request->input('button_text_' . $language->lang_code) ?: $request->input('button_text_en'),
                        'button_url' => $request->input('button_url_' . $language->lang_code) ?: $request->input('button_url_en'),
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'title_1' => $request->input('title_1_' . $language->lang_code) ?? $request->input('title_1_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                    ]
                );
            }
            return redirect()->route('admin.about.home.edit')->with('success', 'Hakkımızda Anasayfa içeriği başarıyla kaydedildi.');
        } catch (\Exception $e) {
            throw $e;
            //return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    

}
