<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Continent;
use App\Models\Language; // Assuming you have a Language model to fetch languages

class CountryController extends Controller
{

    public function index()
    {
        // code to list all countries where lang is en
        $countries = Country::where('lang', 'en')->get();
        $languages = Language::all(); // Assuming you have a Language model to fetch languages

        return view('admin.country.index', compact('countries', 'languages'));
    }

    public function create()
    {
        // code to show create country form
        $languages = Language::all();
        $continents = Continent::where('lang', 'en')->get();
        return view('admin.country.create', compact('languages', 'continents'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        if ($request->has('country_id')) {
            $country_id = $request->country_id; // Use the provided country_id
        }else{
            $country_id = Country::max('country_id') + 1; // Increment the maximum country_id by 1
            if (!$country_id) {
                $country_id = 1; // If no country items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'code_' . $language->lang_code => 'required|max:10',
                        'left_' . $language->lang_code => 'required|max:50',
                        'top_' . $language->lang_code => 'required|max:50',
                        'continent_id_' . $language->lang_code => 'required|integer',
                        'sort_' . $language->lang_code => 'nullable|integer',
                    ]);
                }
                

                Country::updateOrCreate(
                    ['country_id' => $country_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'code' => $request->input('code_' . $language->lang_code) ?? $request->input('code_en'),
                        'left' => $request->input('left_' . $language->lang_code) ?? $request->input('left_en'),
                        'top' => $request->input('top_' . $language->lang_code) ?? $request->input('top_en'),
                        'continent_id' => $request->input('continent_id_' . $language->lang_code) ?? $request->input('continent_id_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

            }

            return redirect()->route('admin.country.index')->with('success', 'Country başarıyla kaydedildi.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        // code to show edit country form
        $countries = Country::where('country_id', $id)->get();
        $continents = Continent::where('lang', 'en')->get();
        //dd($countries);
        $languages = Language::all();

        return view('admin.country.edit', compact('countries', 'languages', 'continents'));
    }

    public function destroy($id)
    {
        // code to delete blog
        Country::where('country_id', $id)->delete();
        return redirect()->route('admin.country.index')->with('success', 'Country başarıyla silindi.');
    }

    // Continent methods can be added here
    public function continentIndex()
    {
        // code to list all continents
        $continents = Continent::where('lang', 'en')->get();
        //dd($continents);
        $languages = Language::all(); // Assuming you have a Language model to fetch languages
        return view('admin.continent.index', compact('continents', 'languages'));
    }

    public function continentCreate()
    {
        // code to show create continent form
        $languages = Language::all();
        return view('admin.continent.create', compact('languages'));
    }

    public function continentStore(Request $request)
    {
        //dd($request->all());

        if ($request->has('continent_id')) {
            $continent_id = $request->continent_id; // Use the provided continent_id
        }else{
            $continent_id = Continent::max('continent_id') + 1; // Increment the maximum continent_id by 1
            if (!$continent_id) {
                $continent_id = 1; // If no continent items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'seo_url_' . $language->lang_code => 'required|max:150',
                        'class_' . $language->lang_code => 'required|max:150',
                        'sort_' . $language->lang_code => 'nullable|integer',
                    ]);
                }
                

                Continent::updateOrCreate(
                    ['continent_id' => $continent_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'seo_url' => $request->input('seo_url_' . $language->lang_code) ?? $request->input('seo_url_en'),
                        'class' => $request->input('class_' . $language->lang_code) ?? $request->input('class_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

            }

            return redirect()->route('admin.continent.index')->with('success', 'Continent başarıyla kaydedildi.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

   public function continentEdit($id)
   {
       // code to show edit continent form
       $continents = Continent::where('continent_id', $id)->get();
       $languages = Language::all();
       return view('admin.continent.edit', compact('continents', 'languages'));
   }

   public function continentDestroy($id)
   {
       // code to delete continent
       Continent::where('continent_id', $id)->delete();
       return redirect()->route('admin.continent.index')->with('success', 'Continent başarıyla silindi.');
   }

}
