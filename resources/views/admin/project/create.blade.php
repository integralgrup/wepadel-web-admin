@extends('admin.layouts.main')
@section('title', 'Proje Ekleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Proje Ekleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Proje Yönetimi</li>
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
                    <div class="card-body">
                        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <?php $required = $language->lang_code == 'en' ? 'required' : ''; ?>
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body">
                                        <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                        <div class="grids-3">
                                            <div class="mb-3">
                                                <label for="title_1_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="title_1_{{ $language->lang_code }}" name="title_1_{{ $language->lang_code }}" {{ $required }}>
                                            </div>
                                            <!-- short_description -->
                                            <div class="mb-3">
                                                <label for="short_description_{{ $language->lang_code }}" class="form-label">Kısa Açıklama ({{ $language->lang_code }})</label>
                                                <textarea class="form-control" id="short_description_{{ $language->lang_code }}" name="short_description_{{ $language->lang_code }}" rows="3" {{ $required }}></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="title_2_{{ $language->lang_code }}" class="form-label">Başlık 2 ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="title_2_{{ $language->lang_code }}" name="title_2_{{ $language->lang_code }}" {{ $required }}>
                                            </div>
                                            <!-- short_description -->
                                            
                                            <div class="mb-3">
                                                <label for="seo_url_{{ $language->lang_code }}" class="form-label">SEO Url ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="seo_url_{{ $language->lang_code }}" name="seo_url_{{ $language->lang_code }}" {{ $required }}>
                                            </div>
                                            <!-- image -->
                                            <div class="mb-3">
                                                <label for="image_{{ $language->lang_code }}" class="form-label">Görsel ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="image_{{ $language->lang_code }}" name="image_{{ $language->lang_code }}" accept="image/*" {{ $required }}>
                                            </div>

                                            <div class="mb-3">
                                                <label for="alt_{{ $language->lang_code }}" class="form-label">Alt Metin ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="alt_{{ $language->lang_code }}" name="alt_{{ $language->lang_code }}" {{ $required }}>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description_{{ $language->lang_code }}" class="form-label">Açıklama ({{ $language->lang_code }})</label>
                                            <textarea class="form-control editor" id="description_{{ $language->lang_code }}" name="description_{{ $language->lang_code }}" rows="3" {{ $required }}></textarea>
                                        </div>
                                        <div class="grids-3">
                                            
                                            <!-- used projects selectbox --> 
                                            <div class="mb-3">
                                                <label for="used_products_{{ $language->lang_code }}" class="form-label">Kullanılan Ürünler ({{ $language->lang_code }})</label>
                                                <select class="form-select" id="used_products_{{ $language->lang_code }}" name="used_products_{{ $language->lang_code }}[]" multiple>
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->product_id }}">{{ $product->title }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">Birden fazla ürün seçmek için Ctrl (Windows) veya Command (Mac) tuşunu basılı tutun.</small>
                                            </div>

                                            <!-- country select box --> 
                                            <div class="mb-3">
                                                <label for="country_id_{{ $language->lang_code }}" class="form-label">Ülke ({{ $language->lang_code }})</label>
                                                <select class="form-select" id="country_id_{{ $language->lang_code }}" name="country_id_{{ $language->lang_code }}">
                                                    <option value="">Seçiniz</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country['country_id'] }}">{{ $country['title'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- seo_title -->
                                            <div class="mb-3">
                                                <label for="seo_title_{{ $language->lang_code }}" class="form-label">SEO Başlığı ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control seo_title" id="seo_title_{{ $language->lang_code }}" name="seo_title_{{ $language->lang_code }}" {{ $required }}>
                                            </div>
                                            <!-- seo_description -->
                                            <div class="mb-3">
                                                <label for="seo_description_{{ $language->lang_code }}" class="form-label">SEO Açıklaması ({{ $language->lang_code }})</label>
                                                <textarea class="form-control seo_description" id="seo_description_{{ $language->lang_code }}" name="seo_description_{{ $language->lang_code }}" rows="3" {{ $required }}></textarea>
                                            </div>
                                            <!-- seo_keywords -->
                                            <div class="mb-3">
                                                <label for="seo_keywords_{{ $language->lang_code }}" class="form-label">SEO Anahtar Kelimeleri ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="seo_keywords_{{ $language->lang_code }}" name="seo_keywords_{{ $language->lang_code }}" {{ $required }}>
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