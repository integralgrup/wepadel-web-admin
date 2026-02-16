@extends('admin.layouts.main')
@section('title', 'Ürün Kategori Güncelleme')
<?php 
// get id parameter from route
$id = request()->route('id');
$categoryId = request()->route('categoryId');
?>
@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ürün Kategori Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ürün Kategori Yönetimi</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif  
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            @foreach($languages as $language)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $language->id }}-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $language->id }}"
                                            type="button" role="tab" aria-controls="tab-{{ $language->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        <img src="{{ $language->domain .'/'. getFolder(['uploads_folder', 'images_folder'], $language->lang_code) .'/'.$language->flag_image }}" alt="{{ $language->title }}" style="width: 20px; margin-right: 5px;"> {{ strtoupper($language->lang_code) }}

                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <?php 
                        foreach($category_items as $key => $category){
                            $title[$category->lang] = $category->title;
                            $seo_url[$category->lang] = $category->seo_url;
                            $seo_title[$category->lang] = $category->seo_title;
                            $alt[$category->lang] = $category->alt;
                            $description[$category->lang] = $category->description;
                            $image[$category->lang] = $category->image;
                            $seo_description[$category->lang] = $category->seo_description;
                            $seo_keywords[$category->lang] = $category->seo_keywords;
                            $sort[$category->lang] = $category->sort;
                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.product.category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $key => $language)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                            <input type="hidden" name="category_id" value="{{ $categoryId }}">
                                        
                                        <!-- parent_category selectbox-->
                                        <div class="mb-3">
                                            <label for="parent_category_id" class="form-label">Üst Kategori ({{ $language->lang_code }})</label>
                                            <select class="form-select" id="parent_category_id" name="parent_category_id_{{ $language->lang_code }}">
                                                <option value="">Seçiniz</option>
                                                @foreach($categories as $parentCategory)
                                                    <option value="{{ $parentCategory->category_id }}" {{ (isset($category_items) && $category_items[$key]->parent_category_id == $parentCategory->category_id) ? 'selected' : '' }}>{{ $parentCategory->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- soru -->
                                        <div class="mb-3">
                                            <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" required value="{{ $title[$language->lang_code] ?? '' }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description_{{ $language->lang_code }}" class="form-label">Açıklama ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="description_{{ $language->lang_code }}" name="description_{{ $language->lang_code }}" required value="{{ $description[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- image -->
                                        <div class="mb-3">
                                                <label for="image_{{ $language->lang_code }}" class="form-label">Görsel ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="image_{{ $language->lang_code }}" name="image_{{ $language->lang_code }}" accept="image/*" value="{{ $image[$language->lang_code] ?? '' }}">
                                                @if($image[$language->lang_code])
                                                    <img src="{{ $language->domain .'/'.  getFolder(['uploads_folder','product_images_folder'], $language->lang_code) . '/' . $image[$language->lang_code] }}" alt="{{ $alt[$language->lang_code] }}" style="width: 200px; height: auto; margin-top: 10px;">
                                                    <input type="hidden" class="form-control" id="old_image_{{ $language->lang_code }}" name="old_image_{{ $language->lang_code }}" value="{{ $image[$language->lang_code] }}" readonly>
                                                @endif
                                            </div>
                                        <div class="mb-3">
                                            <label for="alt_{{ $language->lang_code }}" class="form-label">Alt Metin ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="alt_{{ $language->lang_code }}" name="alt_{{ $language->lang_code }}" required value="{{ $alt[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- seo_url --> 
                                        <div class="mb-3">
                                            <label for="seo_url_{{ $language->lang_code }}" class="form-label">SEO URL ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_url_{{ $language->lang_code }}" name="seo_url_{{ $language->lang_code }}" required value="{{ $category_items[$key]->seo_url ?? '' }}">
                                        </div>

                                        <!-- seo_title -->
                                        <div class="mb-3">
                                            <label for="seo_title_{{ $language->lang_code }}" class="form-label">SEO Başlık ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control seo_title" id="seo_title_{{ $language->lang_code }}" name="seo_title_{{ $language->lang_code }}" value="{{ $category_items[$key]->seo_title ?? '' }}">
                                        </div>

                                        <!-- seo_description -->
                                        <div class="mb-3">
                                            <label for="seo_description_{{ $language->lang_code }}" class="form-label">SEO Açıklama ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control seo_description" id="seo_description_{{ $language->lang_code }}" name="seo_description_{{ $language->lang_code }}" value="{{ $category_items[$key]->seo_description ?? '' }}">
                                        </div>

                                        <!-- seo_keywords -->
                                        <div class="mb-3">
                                            <label for="seo_keywords_{{ $language->lang_code }}" class="form-label">SEO Anahtar Kelimeler ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_keywords_{{ $language->lang_code }}" name="seo_keywords_{{ $language->lang_code }}" value="{{ $category_items[$key]->seo_keywords ?? '' }}">
                                        </div>

                                        <!-- sıralama -->
                                        <div class="mb-3">
                                            <label for="sort_{{ $language->lang_code }}" class="form-label">Sıralama ({{ $language->lang_code }})</label>
                                            <input type="number" class="form-control" id="sort_{{ $language->lang_code }}" name="sort_{{ $language->lang_code }}" value="{{ $sort[$language->lang_code] ?? 0 }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection