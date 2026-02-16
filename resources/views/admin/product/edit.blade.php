@extends('admin.layouts.main')
@section('title', 'Ürün Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ürün Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ürün Yönetimi</li>
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
                        foreach($products as $product){
                            $product_id[$product->lang] = $product->product_id;
                            $seo_url[$product->lang] = $product->seo_url;
                            $title[$product->lang] = $product->title;
                            $description[$product->lang] = $product->description;
                            $technical_info[$product->lang] = $product->technical_info;
                            $image[$product->lang] = $product->image;
                            $slider_image[$product->lang] = $product->slider_image;
                            $features_image[$product->lang] = $product->features_image;
                            $features_description[$product->lang] = $product->features_description;
                            $pdf_file[$product->lang] = $product->pdf_file;
                            $alt[$product->lang] = $product->alt;
                            $seo_title[$product->lang] = $product->seo_title;
                            $seo_description[$product->lang] = $product->seo_description;
                            $seo_keywords[$product->lang] = $product->seo_keywords;
                            $sort[$product->lang] = $product->sort;
                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" >
                                        <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                        <input type="hidden" name="product_id" value="{{ $product_id[$language->lang_code] }}">
                                        <div class="grids-4">
                                            <div class="mb-3">
                                                <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" required value="{{ $title[$language->lang_code] ?? '' }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="slider_image_{{ $language->lang_code }}" class="form-label">Slider Görsel ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="slider_image_{{ $language->lang_code }}" name="slider_image_{{ $language->lang_code }}" accept="image/*" value="{{ $slider_image[$language->lang_code] ?? '' }}">
                                                @if($slider_image[$language->lang_code])
                                                    <img src="{{ $language->domain .'/'.  getFolder(['uploads_folder','product_images_folder'], $language->lang_code) . '/' . $slider_image[$language->lang_code] }}" alt="{{ $alt[$language->lang_code] }}" style="width: 200px; height: auto; margin-top: 10px;">
                                                    <input type="hidden" class="form-control" id="old_slider_image_{{ $language->lang_code }}" name="old_slider_image_{{ $language->lang_code }}" value="{{ $slider_image[$language->lang_code] }}" readonly>
                                                @endif
                                            </div>
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
                                        </div>
                                        <div class="mb-3">
                                            <label for="category_id" class="form-label">Kategori ({{ $language->lang_code }})</label>
                                            <select class="form-select" id="category_id" name="category_id" required >
                                                <option value="">Kategori Seçiniz</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->category_id }}" {{ $category->category_id == $product->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                             <!-- description -->
                                            <div class="mb-3">
                                                <label for="description_{{ $language->lang_code }}" class="form-label">Açıklama ({{ $language->lang_code }})</label>
                                                <textarea class="form-control editor" id="description_{{ $language->lang_code }}" name="description_{{ $language->lang_code }}" rows="3" required>{{ $description[$language->lang_code] ?? '' }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="features_description_{{ $language->lang_code }}" class="form-label">Features Açıklaması ({{ $language->lang_code }})</label>
                                                <textarea class="form-control editor" id="features_description_{{ $language->lang_code }}" name="features_description_{{ $language->lang_code }}" rows="3" required>{{ $features_description[$language->lang_code] ?? '' }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="technical_info_{{ $language->lang_code }}" class="form-label">Teknik Bilgiler ({{ $language->lang_code }})</label>
                                                <textarea class="form-control editor" id="technical_info_{{ $language->lang_code }}" name="technical_info_{{ $language->lang_code }}" rows="3" required>{{ $technical_info[$language->lang_code] ?? '' }}</textarea>
                                            </div>
                                        </div>



                                        <div class="grids-4">

                                            <div class="mb-3">
                                                <label for="features_image_{{ $language->lang_code }}" class="form-label">Features Görsel ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="features_image_{{ $language->lang_code }}" name="features_image_{{ $language->lang_code }}" accept="image/*" value="{{ $features_image[$language->lang_code] ?? '' }}">
                                                @if($features_image[$language->lang_code])
                                                    <img src="{{ $language->domain .'/'.  getFolder(['uploads_folder','product_images_folder'], $language->lang_code) . '/' . $features_image[$language->lang_code] }}" alt="{{ $alt[$language->lang_code] }}" style="width: 200px; height: auto; margin-top: 10px;">
                                                    <input type="hidden" class="form-control" id="old_features_image_{{ $language->lang_code }}" name="old_features_image_{{ $language->lang_code }}" value="{{ $features_image[$language->lang_code] }}" readonly>
                                                @endif
                                            </div>

                                            <!-- pdf file -->
                                            <div class="mb-3">
                                                <label for="pdf_file_{{ $language->lang_code }}" class="form-label">PDF Dosyası ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="pdf_file_{{ $language->lang_code }}" name="pdf_file_{{ $language->lang_code }}" accept=".pdf">
                                                @if(isset($pdf_file[$language->lang_code]) && $pdf_file[$language->lang_code])
                                                    <a href="{{ $language->domain .'/'.  getFolder(['uploads_folder','product_images_folder'], $language->lang_code) . '/' . $pdf_file[$language->lang_code] }}" target="_blank">Mevcut PDF Dosyası</a>
                                                    <input type="hidden" class="form-control" id="old_pdf_file_{{ $language->lang_code }}" name="old_pdf_file_{{ $language->lang_code }}" value="{{ $pdf_file[$language->lang_code] }}" readonly>
                                                @endif
                                            </div>
                                            <!-- seo_url -->
                                            <div class="mb-3">
                                                    <label for="seo_url_{{ $language->lang_code }}" class="form-label">SEO Url ({{ $language->lang_code }})</label>
                                                    <input type="text" class="form-control" id="seo_url_{{ $language->lang_code }}" name="seo_url_{{ $language->lang_code }}" required value="{{ $seo_url[$language->lang_code] ?? '' }}">
                                            </div>
                                                
                                            <!-- seo_title -->
                                            <div class="mb-3">
                                                <label for="seo_title_{{ $language->lang_code }}" class="form-label">SEO Başlığı ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control seo_title" id="seo_title_{{ $language->lang_code }}" name="seo_title_{{ $language->lang_code }}" required value="{{ $seo_title[$language->lang_code] ?? '' }}">
                                            </div>
                                            <!-- seo_description -->
                                            <div class="mb-3">
                                                <label for="seo_description_{{ $language->lang_code }}" class="form-label">SEO Açıklaması ({{ $language->lang_code }})</label>
                                                <textarea class="form-control seo_description" id="seo_description_{{ $language->lang_code }}" name="seo_description_{{ $language->lang_code }}" required rows="3">{{ $seo_description[$language->lang_code] ?? '' }}</textarea>
                                            </div>
                                            <!-- seo_keywords -->
                                            <div class="mb-3">
                                                <label for="seo_keywords_{{ $language->lang_code }}" class="form-label">SEO Anahtar Kelimeleri ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="seo_keywords_{{ $language->lang_code }}" name="seo_keywords_{{ $language->lang_code }}" required value="{{ $seo_keywords[$language->lang_code] ?? '' }}">
                                            </div>
                                            <!-- sıralama -->
                                            <div class="mb-3">
                                                <label for="sort_{{ $language->lang_code }}" class="form-label">Sıralama ({{ $language->lang_code }})</label>
                                                <input type="number" class="form-control" id="sort_{{ $language->lang_code }}" name="sort_{{ $language->lang_code }}" value="{{ $sort[$language->lang_code] ?? 0 }}">
                                            </div>
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