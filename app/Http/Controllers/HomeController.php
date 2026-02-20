<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Language;
use App\Models\Blog;
use App\Models\BlogSlider;
use App\Models\About;
use App\Models\Menu;
use App\Models\Office;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Club;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductImage;
use App\Models\ProductFaq;
use App\Models\ProductType;
use App\Models\ProductFeature;
use App\Models\CatalogGroup;
use App\Models\Catalog;
use App\Models\CatalogFile;
use App\Models\Country;
use App\Models\Continent;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Models\SeoSettings;
use App\Models\StaticImage;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

     // construct function
    public function __construct()
    {
        $static_images = StaticImage::where('lang', app()->getLocale())->get();

        //dd($static_images);

        $imagesByTitle = [];
        foreach($static_images as $image) {
            $imagesByTitle[$image->title] = $image;
        }


        view()->share('static_images', $imagesByTitle);

        //dd($imagesByTitle);
    }

    public function index()
    {

        /*$projects = Project::where('lang', 'ru')
        ->select(['id','project_id', 'title_1', 'lang', 'image', 'country_id'])
        ->with(['gallery', 'country', 'country.continent'])->get();

        $blogs = Blog::where('lang', 'ae')
        ->select(['id','blog_id', 'title', 'seo_url', 'lang', 'image'])
        ->get();

        $products = Product::where('lang', 'ae')
        //where product_id > 17
            ->where('product_id', '>', 17)
            ->select(['id', 'product_id', 'title', 'lang', 'image'])
            ->get();

        //dd($products);
        //dd($projects);project-image-1695678748

        $images_folder = '/Applications/MAMP/htdocs/wepadel-resimler/urunler';
        $product_folder = '/Applications/MAMP/htdocs/wepadel-web-admin/public/ae/التحميلات/منتجات';*/

        //uploads/project
        //tr/yuklemeler/proje
        //es/subidas/proyectos
        //fr/telechargements/projets
        //ae/التحميلات/منتجات';
        //ru/загружает/продукты
        //الأخبار
        /*try {
            foreach($products as $product) {
                //check project image exists in images_folder
                
                if(file_exists($images_folder . '/' . $product->image)) {
                    //copy project image to project_folder
                    if(copy($images_folder . '/' . $product->image, $product_folder . '/' . $product->image)){
                        echo 'image ' . $product->image . ' copied to product folder <br/>';
                    }

                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }

        

        die('done');*/

        //dd($_SERVER['DOCUMENT_ROOT']);
        $sliders = Slider::where('lang', app()->getLocale())->get();
        $languages = Language::all();
        $about = DB::table('about_home')->where('lang', app()->getLocale())->first();
        $about_sliders = DB::table('about_slider')->where('lang', app()->getLocale())->get();
        $about_certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get();
        $products = // Get products with related category
            Product::where('lang', app()->getLocale())
            ->with(['category' => function ($q) {
                $q->where('lang', app()->getLocale());
            }])
            ->get();
        $categories = ProductCategory::where(['parent_category_id' => 0, 'lang' => app()->getLocale()])->orderBy('sort', 'asc')->get();

        //dd($categories);

        $clubs = Club::where('lang', app()->getLocale())->get();
        $countries = Country::where('lang', app()->getLocale())// with continent data
            ->with('continent')
            ->get()
            ->map(function ($country) {
                return [
                    'title' => $country->title,
                    'code' => $country->code,
                    'left' => $country->left,
                    'top' => $country->top,
                    'continent_title' => $country->continent ? $country->continent->title : null,
                    'continent_class' => $country->continent ? $country->continent->class : null,
                ];
            })
            ->toArray();
        $projects = Project::where('lang', app()->getLocale())->with(['gallery', 'country', 'country.continent'])->limit(10)->get();
        //dd($projects);
        $blogs = Blog::where('lang', app()->getLocale())->limit(5)->get();
        //dd($blog);
        $continents = Continent::where('lang', app()->getLocale())->with('countries')->get()->toArray();

        $seo = SeoSettings::where('page', 'home')->where('lang', app()->getLocale())->first();

        return view('home', compact('sliders', 'languages', 'about', 'about_sliders', 'about_certificates', 'categories', 'products', 'clubs', 'countries', 'continents', 'projects', 'blogs', 'seo'));
    }

    public function route($slug, $slug2 = null)
    {
        

        if($slug == 'copy-db') {

            $lang_array = ['es', 'tr', 'fr', 'ru', 'ae']; // Add more languages as needed

            if(in_array($slug2, $lang_array)) {
                $lang = $slug2;
            } else {
                return "Invalid or missing language code. Please provide a valid language code (e.g., /copy-db/es).";
            }

            return $this->copyDB($lang);
        }

        $menu = Menu::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->firstOrFail();

        //dd($menu);
        
        // If the menu item has a page_type of 'about', fetch the about data
        if($menu->page_type == 'about') {
            $about = About::where('lang', app()->getLocale())->first();
            $about_slider = DB::table('about_slider')->where('lang', app()->getLocale())->get()->toArray();
            $how_we_do = DB::table('about_how_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $what_we_do =  DB::table('about_what_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get()->toArray();
            $brands = Brand::where('lang', app()->getLocale())->get();
            $seo = SeoSettings::where('page', 'about')->where('lang', app()->getLocale())->first();
            $blogs = Blog::where('lang', app()->getLocale())->limit(5)->get();
            //debug($certificates);
            
            //dd($politics);
            return view('about', compact('about','blogs', 'how_we_do', 'what_we_do', 'certificates', 'about_slider', 'brands', 'seo'));
        }

        if($menu->page_type == 'product_category') {
            $category = ProductCategory::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->first();
            // if $category is not null
            if($category) {
                $category = ProductCategory::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->first();
                $categories = ProductCategory::where('lang', app()->getLocale())->with('product')->get();
                //dd($category);
                $products = Product::where(['lang' => app()->getLocale(), 'category_id' => $category->category_id])->with(['images', 'category'])->get();
                //dd($products);
                $seo = SeoSettings::where('page', 'product_category')->where('lang', app()->getLocale())->first();
                return view('product_category', compact('category', 'categories', 'products', 'menu', 'seo'));

            } else {

                $product = Product::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->with(['category', 'gallery', 'faqs', 'types', 'images', 'features','features2'])->firstOrFail();
                
                $seo = $product;
                //dd($product);
                return view('product', compact('product', 'seo'));
            }
        }

        if($menu->page_type == 'product') {
            
                $product = Product::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->with(['category', 'gallery', 'faqs', 'types', 'images', 'features', 'features2'])->firstOrFail();
                
                $seo = $product;
                //dd($product);
                return view('product', compact('product', 'seo'));
            
        }

        

        if($menu->page_type == 'club') {
            if($slug2 != null) {
                $club = Club::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->with(['sliders1', 'sliders2', 'sliders3', 'features', 'faqs'])->firstOrFail();
                $seo = $club;
                
                return view('club', compact('club', 'seo'));
            }

        }

        if($menu->page_type == 'project') {

            if($slug2 == null) {
                
                //$projects = Project::where(['lang' => app()->getLocale()])->with(['gallery'])->get();
                $projects = Project::where(['lang' => app()->getLocale()])->with(['gallery', 'country', 'country.continent'])->orderBy('id', 'desc')->get();
                $seo = SeoSettings::where('page', 'projects')->where('lang', app()->getLocale())->first();
                //dd($projects);
                return view('projects', compact('projects', 'seo'));

            }else{
                $slug = $slug2;
                // Get project with related gallery images, and find project country and continent from countries table
                
                $project = Project::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->with(['gallery'])->firstOrFail();
                //dd($project);
                // Get products for "Used Products" section, limit 3, product_ids should be in array from $project->used_products string(1,3,5)
                // where product_id in (1,3,5) and lang = app()->getLocale()
                // Also get product category data
                $seo = $project;

                $used_product_ids = array_map('trim', explode(',', $project->used_products));
                //dd($used_product_ids);
                $products = Product::where(['lang' => app()->getLocale()])
                    ->whereIn('product_id', $used_product_ids)
                    ->with(['category' => function ($q) {
                        $q->where('lang', app()->getLocale());
                    }])
                    ->limit(5)->get();
                //dd($products);
                return view('project', compact('project', 'products', 'seo'));
            }

        }

        if($menu->page_type == 'blog') {
            if($slug2!= null) {
                // Get blog posts limit 5 as array
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(10)->orderBy('created_at', 'desc')->get();
                //dd($blogs);
                $blog = Blog::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->firstOrFail();
                $seo = $blog;
                $blogSlider = BlogSlider::where(['lang' => app()->getLocale(), 'blog_id' => $blog->blog_id])->get();
                //dd($blogSlider);
                return view('blog-detail', compact('blog', 'blogs', 'blogSlider', 'seo'));
            }else{
                $seo = SeoSettings::where('page', 'news')->where('lang', app()->getLocale())->first();
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(12)->orderBy('created_at', 'desc')->get();
                //dd($blogs);
                return view('blog', compact('blogs', 'seo'));
            }
        }

        if($menu->page_type == 'contact') {
            $offices = Office::where(['lang' => app()->getLocale()])->get();
            $seo = SeoSettings::where('page', 'contact')->where('lang', app()->getLocale())->first();
            return view('contact', compact('offices', 'seo'));
        }

        if($menu->page_type == 'page') {
            $page = Page::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->first();
            $seo = $page;
            //dd($page);
            return view('page', compact('page', 'seo'));
        }

        //return view('page', compact('page'));
    }

    public function copyDB($lang)
    {
        die('Function disabled for security reasons.');
        $sourceLang = 'en';
        $targetLang = $lang;

        $tables = [
            'about',
            'about_certificates',
            'about_home',
            'about_how_we_do',
            'about_slider',
            'about_what_we_do',
            'blog',
            'blog_slider',
            'brand',
            'club',
            'club_faq',
            'club_features',
            'club_slider_1',
            'club_slider_2',
            'club_slider_3',
            'footer_info',
            'main_slider',
            'menu',
            'office',
            'page',
            'product',
            'product_category',
            'product_faq',
            'product_feature',
            'product_gallery',
            'product_image',
            'product_type',
            'project',
            'project_gallery',
            'seo_settings',
            'static_text',
            'static_image',
        ];

        //Fetch all records from source language
        //Change the lang column to target language
        //Insert into the same table
        foreach ($tables as $table) {
            $records = DB::table($table)->where('lang', $sourceLang)->get();
            foreach ($records as $record) {
                $newRecord = (array) $record; // Convert stdClass to array
                $newRecord['lang'] = $targetLang;
                // Remove primary key to avoid duplicate key error
                unset($newRecord[array_key_first($newRecord)]);
                DB::table($table)->insert($newRecord);
            }
        }

        return "Database copy from {$sourceLang} to {$targetLang} completed.";
    }
}