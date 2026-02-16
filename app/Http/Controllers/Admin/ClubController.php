<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Language;
use App\Models\ClubSlider1;
use App\Models\ClubSlider2;
use App\Models\ClubSlider3;
use App\Models\ClubFeatures;
use App\Models\ClubFaq;

class ClubController extends Controller
{
    public function __construct()
    {
        $this->languages = Language::all();
        view()->share('languages', $this->languages);
    }
    // Display a list of products
    public function index()
    {
        // code to list all clubs where lang is en
        $clubs = Club::where('lang', 'en')->get();
        return view('admin.club.index', compact('clubs'));
    }

    public function create()
    {
        // code to show create club form
        return view('admin.club.create');
    }

    public function store(Request $request)
    {
        // code to store new club

        //dd($request->all());

        if ($request->has('club_id')) {
                $club_id = $request->club_id; // Use the provided club_id
            }else{

                //if club count is > 0
                if (Club::count() > 0) {
                    $club_id = Club::max('club_id') + 1; // Increment the maximum club_id by 1
                } else {
                    $club_id = 1; // If no club items exist, start with 1
                }
            }
        try {
            
            //validation
            foreach ($this->languages as $language) {

                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'image_' . $language->lang_code => 'nullable|image|max:2048', // Assuming image is optional
                        'alt_' . $language->lang_code => 'required|max:255',
                        'title_1_' . $language->lang_code => 'required|max:100',
                        'title_2_' . $language->lang_code => 'required|max:100',
                        'seo_url_' . $language->lang_code => 'required|max:255',
                        'button_text_' . $language->lang_code => 'required|max:100',
                        'pdf_button_text_' . $language->lang_code => 'required|max:100',
                        'description_1_' . $language->lang_code => 'required',
                        'description_2_' . $language->lang_code => 'required',
                        'pdf_file_' . $language->lang_code => 'nullable|file|mimes:pdf|max:20048', // Assuming PDF is optional
                        'seo_title_' . $language->lang_code => 'nullable|max:255',
                        'seo_description_' . $language->lang_code => 'nullable|max:255',
                        'seo_keywords_' . $language->lang_code => 'nullable|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('pdf_file_en') || $request->hasFile('pdf_file_' . $language->lang_code)) {
                    $tmpFilePath = createTmpFile($request, 'pdf_file_en', $this->languages[0]);
                    $fileName = moveFile($request,$language,'pdf_file_' . $language->lang_code, 'pdf_file_en', 'alt_' . $language->lang_code, 'title_en', $language->club_images_folder, $tmpFilePath);
                    //dd($fileName);
                }else{
                    $fileName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                Club::updateOrCreate(
                    ['club_id' => $club_id, 'lang' => $language->lang_code],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'image' => $imageName ?? '',
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'title_1' => $request->input('title_1_' . $language->lang_code) ?? $request->input('title_1_en'),
                        'title_2' => $request->input('title_2_' . $language->lang_code) ?? $request->input('title_2_en'),
                        'description_1' => $request->input('description_1_' . $language->lang_code) ?? $request->input('description_1_en'),
                        'description_2' => $request->input('description_2_' . $language->lang_code) ?? $request->input('description_2_en'),
                        'pdf_file' => $fileName,
                        'button_text' => $request->input('button_text_' . $language->lang_code) ?? $request->input('button_text_en'),
                        'pdf_button_text' => $request->input('pdf_button_text_' . $language->lang_code) ?? $request->input('pdf_button_text_en'),
                        'seo_url' => $request->input('seo_url_' . $language->lang_code) ?? $request->input('seo_url_en'),
                        'seo_title' => $request->input('seo_title_' . $language->lang_code) ?? $request->input('seo_title_en'),
                        'seo_description' => $request->input('seo_description_' . $language->lang_code) ?? $request->input('seo_description_en'),
                        'seo_keywords' => $request->input('seo_keywords_' . $language->lang_code) ?? $request->input('seo_keywords_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en'),
                    ]
                );

                //unlink tmp files
                if (isset($tmpImgPath) && file_exists($tmpImgPath)) {
                    unlink($tmpImgPath);
                }
                if (isset($tmpFilePath) && file_exists($tmpFilePath)) {
                    unlink($tmpFilePath);
                }

            }



            return redirect()->route('admin.club.index')->with('success', 'Kulüp başarıyla kaydedildi.');
        } catch (\Exception $e) {
            throw $e;
            //return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        // code to show edit club form
        $clubs = Club::where('club_id', $id)->get();
        //dd($clubs);
        return view('admin.club.edit', compact('clubs'));
    }

    public function destroy($id)
    {
        // code to delete club
        Club::where('club_id', $id)->delete();
        //ClubSlider::where('club_id', $id)->delete();
        return redirect()->route('admin.club.index')->with('success', 'Club başarıyla silindi.');
    }

    // Additional methods for managing sliders, features, and FAQs can be added here
    // ClubSlider1 methods
    public function slider1Index($club_id)
    {
        $sliders = ClubSlider1::where('club_id', $club_id)->where('lang', 'en')->orderBy('sort')->get();
        

        return view('admin.club.slider1.index', compact('sliders', 'club_id'));
    }

    // Other methods for slider1 (create, store, edit, update, destroy) would go here

    public function slider1Create($club_id)
    {
        $club = Club::where('club_id', $club_id)->where('lang', 'en')->first();
        if (!$club) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Kulüp bulunamadı.']);
        }
        return view('admin.club.slider1.create', compact('club'));
    }

    public function slider1Store(Request $request, $club_id)
    {
        if ($request->has('slider_id')) {
            $slider_id = $request->slider_id; // Use the provided slider_id
        }else{
            $slider_id = ClubSlider1::max('slider_id') + 1; // Increment the maximum slider_id by 1
            if (!$slider_id) {
                $slider_id = 1; // If no slider items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'description_' . $language->lang_code => 'required',
                        'icon_' . $language->lang_code => 'nullable|image|max:2048',
                        'image_' . $language->lang_code => 'nullable|image|max:2048', // Assuming image is optional
                        // Video validation
                        'video_' . $language->lang_code => 'nullable|mimes:mp4,avi,mov|max:10240',
                        'sort_' . $language->lang_code => 'required|integer',
                        'alt_' . $language->lang_code => 'required|max:255',
                    ]);
                }
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('icon_en') || $request->hasFile('icon_' . $language->lang_code)) {
                    $tmpIconPath = createTmpFile($request, 'icon_en', $languages[0]);
                    $iconName = moveFile($request,$language,'icon_' . $language->lang_code, 'icon_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpIconPath);
                    //dd($iconName);
                }else{
                    $iconName = $request->input('old_icon_' . $language->lang_code, null); // Use old icon if no new icon is uploaded
                }

                if ($request->hasFile('video_en') || $request->hasFile('video_' . $language->lang_code)) {
                    $tmpVideoPath = createTmpFile($request, 'video_en', $languages[0]);
                    $videoName = moveFile($request,$language,'video_' . $language->lang_code, 'video_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpVideoPath);
                    //dd($videoName);
                }else{
                    $videoName = $request->input('old_video_' . $language->lang_code, null); // Use old video if no new video is uploaded
                }

                ClubSlider1::updateOrCreate(
                    ['slider_id' => $slider_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'club_id' => $club_id,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'icon' => $iconName,
                        'image' => $imageName,
                        'video' => $videoName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

                //unlink tmp files
                if (isset($tmpImgPath) && file_exists($tmpImgPath)) {
                    unlink($tmpImgPath);
                }
                if (isset($tmpIconPath) && file_exists($tmpIconPath)) {
                    unlink($tmpIconPath);
                }
                if (isset($tmpVideoPath) && file_exists($tmpVideoPath)) {
                    unlink($tmpVideoPath);
                }
            }

            


            return redirect()->route('admin.club.slider1.index', $club_id)->with('success', 'Slider başarıyla kaydedildi.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function slider1Edit($club_id, $id)
    {
        $sliders = ClubSlider1::where('slider_id', $id)->where('club_id', $club_id)->get();
        
        return view('admin.club.slider1.edit', compact('sliders'));
    }

    public function slider1Destroy($id)
    {
        $slider = ClubSlider1::find($id);
        if (!$slider) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Slider bulunamadı.']);
        }
        $slider->delete();
        return redirect()->route('admin.club.slider1.index', $slider->club_id)->with('success', 'Slider başarıyla silindi.');
    }

    // Similar methods for ClubSlider2, ClubSlider3, ClubFeatures, and ClubFaq can be implemented here
    public function slider2Index($club_id)
    {
        $sliders = ClubSlider2::where('club_id', $club_id)->where('lang', 'en')->get();
        return view('admin.club.slider2.index', compact('sliders', 'club_id'));
    }

    public function slider2Create($club_id)
    {
        $club = Club::where('club_id', $club_id)->where('lang', 'en')->first();
        if (!$club) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Kulüp bulunamadı.']);
        }
        return view('admin.club.slider2.create', compact('club'));
    }

    public function slider2Store(Request $request, $club_id)
    {
        if ($request->has('slider_id')) {
            $slider_id = $request->slider_id; // Use the provided slider_id
        }else{
            $slider_id = ClubSlider2::max('slider_id') + 1; // Increment the maximum slider_id by 1
            if (!$slider_id) {
                $slider_id = 1; // If no slider items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'image_' . $language->lang_code => 'required|image|max:2048', // Assuming image is optional
                        'sort_' . $language->lang_code => 'required|integer',
                        'alt_' . $language->lang_code => 'required|max:255',
                    ]);
                }
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                ClubSlider2::updateOrCreate(
                    ['slider_id' => $slider_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'club_id' => $club_id,
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

                //unlink tmp files
                if (isset($tmpImgPath) && file_exists($tmpImgPath)) {
                    unlink($tmpImgPath);
                }
            }

            return redirect()->route('admin.club.slider2.index', $club_id)->with('success', 'Slider başarıyla kaydedildi.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function slider2Edit($club_id, $id)
    {
        $sliders = ClubSlider2::where('slider_id', $id)->where('club_id', $club_id)->get();
        return view('admin.club.slider2.edit', compact('sliders'));
    }

    public function slider2Destroy($id)
    {
        $slider = ClubSlider2::find($id);
        if (!$slider) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Slider bulunamadı.']);
        }
        $slider->delete();
        return redirect()->route('admin.club.slider2.index', $slider->club_id)->with('success', 'Slider başarıyla silindi.');
    }

    public function slider3Index($club_id)
    {
        $sliders = ClubSlider3::where('club_id', $club_id)->where('lang', 'en')->get();
        return view('admin.club.slider3.index', compact('sliders', 'club_id'));
    }

    public function slider3Create($club_id)
    {
        $club = Club::where('club_id', $club_id)->where('lang', 'en')->first();
        if (!$club) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Kulüp bulunamadı.']);
        }
        return view('admin.club.slider3.create', compact('club'));
    }

    public function slider3Store(Request $request, $club_id)
    {
        if ($request->has('slider_id')) {
            $slider_id = $request->slider_id; // Use the provided slider_id
        }else{
            $slider_id = ClubSlider3::max('slider_id') + 1; // Increment the maximum slider_id by 1
            if (!$slider_id) {
                $slider_id = 1; // If no slider items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'image_' . $language->lang_code => 'required|image|max:2048', // Assuming image is optional
                        'sort_' . $language->lang_code => 'required|integer',
                        'alt_' . $language->lang_code => 'required|max:255',
                    ]);
                }
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                ClubSlider3::updateOrCreate(
                    ['slider_id' => $slider_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'club_id' => $club_id,
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

                //unlink tmp files
                if (isset($tmpImgPath) && file_exists($tmpImgPath)) {
                    unlink($tmpImgPath);
                }
            }

            return redirect()->route('admin.club.slider3.index', $club_id)->with('success', 'Slider başarıyla kaydedildi.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function slider3Edit($club_id, $id)
    {
        $sliders = ClubSlider3::where('slider_id', $id)->where('club_id', $club_id)->get();
        return view('admin.club.slider3.edit', compact('sliders'));
    }

    public function slider3Destroy($id)
    {
        $slider = ClubSlider3::find($id);
        if (!$slider) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Slider bulunamadı.']);
        }
        $slider->delete();
        return redirect()->route('admin.club.slider3.index', $slider->club_id)->with('success', 'Slider başarıyla silindi.');
    }

    // Club Features methods would go here
    public function featuresIndex($club_id)
    {
        $features = ClubFeatures::where('club_id', $club_id)->where('lang', 'en')->get();
        return view('admin.club.features.index', compact('features', 'club_id'));
    }

    public function featuresCreate($club_id)
    {
        $club = Club::where('club_id', $club_id)->where('lang', 'en')->first();
        if (!$club) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Kulüp bulunamadı.']);
        }
        return view('admin.club.features.create', compact('club'));
    }

    public function featuresStore(Request $request, $club_id)
    {
        
        if ($request->has('feature_id')) {
            $feature_id = $request->feature_id; // Use the provided feature_id
        }else{
            $feature_id = ClubFeatures::max('feature_id') + 1; // Increment the maximum feature_id by 1
            if (!$feature_id) {
                $feature_id = 1; // If no feature items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'description_' . $language->lang_code => 'required|max:500',
                        'icon_' . $language->lang_code => 'nullable|image|max:2048',
                        'image_' . $language->lang_code => 'nullable|image|max:2048', // Assuming image is optional
                        // Video validation
                        'sort_' . $language->lang_code => 'required|integer',
                        'alt_' . $language->lang_code => 'required|max:255',
                    ]);
                }
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('icon_en') || $request->hasFile('icon_' . $language->lang_code)) {
                    $tmpIconPath = createTmpFile($request, 'icon_en', $languages[0]);
                    $iconName = moveFile($request,$language,'icon_' . $language->lang_code, 'icon_en', 'alt_' . $language->lang_code, 'alt_en', $language->club_images_folder, $tmpIconPath);
                    //dd($iconName);
                }else{
                    $iconName = $request->input('old_icon_' . $language->lang_code, null); // Use old icon if no new icon is uploaded
                }

                ClubFeatures::updateOrCreate(
                    ['feature_id' => $feature_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'club_id' => $club_id,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'icon' => $iconName,
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

                //unlink tmp files
                if (isset($tmpImgPath) && file_exists($tmpImgPath)) {
                    unlink($tmpImgPath);
                }
                if (isset($tmpIconPath) && file_exists($tmpIconPath)) {
                    unlink($tmpIconPath);
                }
            }

            return redirect()->route('admin.club.features.index', $club_id)->with('success', 'Özellik başarıyla kaydedildi.');
        } catch (\Exception $e) {
            //dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }

    }

    public function featuresEdit($club_id, $id)
    {
        $features = ClubFeatures::where('feature_id', $id)->where('club_id', $club_id)->get();
        return view('admin.club.features.edit', compact('features'));
    }

    public function featuresDestroy($id)
    {
        $feature = ClubFeatures::find($id);
        if (!$feature) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Özellik bulunamadı.']);
        }
        $feature->delete();
        return redirect()->route('admin.club.features.index', $feature->club_id)->with('success', 'Özellik başarıyla silindi.');
    }

    // Club FAQ methods would go here
    public function faqIndex($club_id)
    {
        $faqs = ClubFaq::where('club_id', $club_id)->where('lang', 'en')->get();
        return view('admin.club.faq.index', compact('faqs', 'club_id'));

    }
    public function faqCreate($club_id)
    {
        $club = Club::where('club_id', $club_id)->where('lang', 'en')->first();
        if (!$club) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'Kulüp bulunamadı.']);
        }
        return view('admin.club.faq.create', compact('club'));
    }

    public function faqStore(Request $request, $club_id)
    {
        if ($request->has('question_id')) {
            $question_id = $request->question_id; // Use the provided question_id
        }else{
            $question_id = ClubFaq::max('question_id') + 1; // Increment the maximum question_id by 1
            if (!$question_id) {
                $question_id = 1; // If no question items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:255',
                        'description_' . $language->lang_code => 'required',
                        'sort_' . $language->lang_code => 'required|integer',
                    ]);
                }

                ClubFaq::updateOrCreate(
                    ['question_id' => $question_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'club_id' => $club_id,
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

            }

            return redirect()->route('admin.club.faq.index', $club_id)->with('success', 'SSS başarıyla kaydedildi.');
        } catch (\Exception $e) {
            //dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }   

    public function faqEdit($club_id, $id)
    {
        $faqs = ClubFaq::where('question_id', $id)->where('club_id', $club_id)->get();
        return view('admin.club.faq.edit', compact('faqs'));
    }

    public function faqDestroy($id)
    {
        $faq = ClubFaq::find($id);
        if (!$faq) {
            return redirect()->route('admin.club.index')->withErrors(['error' => 'SSS bulunamadı.']);
        }
        $faq->delete();
        return redirect()->route('admin.club.faq.index', $faq->club_id)->with('success', 'SSS başarıyla silindi.');
    }

}
