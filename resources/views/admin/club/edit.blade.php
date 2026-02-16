@extends('admin.layouts.main')
@section('title', 'Kulüp Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Kulüp Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb item active" aria-current="page">Kulüp Yönetimi</li>
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
                        foreach($clubs as $club){
                            $club_id[$club->lang] = $club->club_id;
                            $seo_url[$club->lang] = $club->seo_url;
                            $title[$club->lang] = $club->title;
                            $alt[$club->lang] = $club->alt;
                            $image[$club->lang] = $club->image;
                            $title_1[$club->lang] = $club->title_1;
                            $title_2[$club->lang] = $club->title_2;
                            $button_text[$club->lang] = $club->button_text;
                            $pdf_button_text[$club->lang] = $club->pdf_button_text;
                            $description_1[$club->lang] = $club->description_1;
                            $description_2[$club->lang] = $club->description_2;
                            $pdf_file[$club->lang] = $club->pdf_file;
                            $seo_title[$club->lang] = $club->seo_title;
                            $seo_description[$club->lang] = $club->seo_description;
                            $seo_keywords[$club->lang] = $club->seo_keywords;
                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.club.store', $club_id[$language->lang_code]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <input type="hidden" name="club_id" value="{{ $club_id[$language->lang_code] }}">
                                <input type="hidden" name="lang" value="{{ $language->lang_code }}">
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <div class="mb-3">
                                            <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" value="{{ $title[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image_{{ $language->lang_code }}" class="form-label">Resim ({{ $language->lang_code }})</label>
                                            <input type="file" class="form-control" id="image_{{ $language->lang_code }}" name="image_{{ $language->lang_code }}">
                                            @if(isset($image[$language->lang_code]) && $image[$language->lang_code])
                                                <img src="{{ $language->domain .'/'.  getFolder(['uploads_folder','club_images_folder'], $language->lang_code) . '/' . $image[$language->lang_code] }}" alt="{{ $alt[$language->lang_code] ?? '' }}" style="width: 100px; margin-top: 10px;">
                                                <input type="hidden" class="form-control" id="old_image_{{ $language->lang_code }}" name="old_image_{{ $language->lang_code }}" value="{{ $image[$language->lang_code] }}" readonly>
                                            @endif
                                        </div>

                                        <!-- alt text -->
                                        <div class="mb-3">
                                            <label for="alt_{{ $language->lang_code }}" class="form-label">Alt Text ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="alt_{{ $language->lang_code }}" name="alt_{{ $language->lang_code }}" value="{{ $alt[$language->lang_code] ?? '' }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="title_1_{{ $language->lang_code }}" class="form-label">Başlık 2 ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="title_1_{{ $language->lang_code }}" name="title_1_{{ $language->lang_code }}" value="{{ $title_1[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title_2_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="title_2_{{ $language->lang_code }}" name="title_2_{{ $language->lang_code }}" value="{{ $title_2[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seo_url_{{ $language->lang_code }}" class="form-label">SEO URL ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_url_{{ $language->lang_code }}" name="seo_url_{{ $language->lang_code }}" value="{{ $seo_url[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="button_text_{{ $language->lang_code }}" class="form-label">Buton Text ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="button_text_{{ $language->lang_code }}" name="button_text_{{ $language->lang_code }}" value="{{ $button_text[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pdf_button_text_{{ $language->lang_code }}" class="form-label">PDF Buton Text ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="pdf_button_text_{{ $language->lang_code }}" name="pdf_button_text_{{ $language->lang_code }}" value="{{ $pdf_button_text[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <!-- pdf file --> 
                                        <div class="mb-3">
                                            <label for="pdf_file_{{ $language->lang_code }}" class="form-label">PDF Dosyası ({{ $language->lang_code }})</label>
                                            <input type="file" class="form-control" id="pdf_file_{{ $language->lang_code }}" name="pdf_file_{{ $language->lang_code }}" accept=".pdf">
                                            @if(isset($pdf_file[$language->lang_code]) && $pdf_file[$language->lang_code])
                                                <a href="{{ $language->domain .'/'.  getFolder(['uploads_folder','club_images_folder'], $language->lang_code) . '/' . $pdf_file[$language->lang_code] }}" target="_blank">Mevcut PDF Dosyası</a>
                                                <input type="hidden" class="form-control" id="old_pdf_file_{{ $language->lang_code }}" name="old_pdf_file_{{ $language->lang_code }}" value="{{ $pdf_file[$language->lang_code] }}" readonly>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="description_1_{{ $language->lang_code }}" class="form-label">Açıklama 1 ({{ $language->lang_code }})</label>
                                            <textarea class="form-control" id="description_1_{{ $language->lang_code }}" name="description_1_{{ $language->lang_code }}" rows="3" required>{{ $description_1[$language->lang_code] ?? '' }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description_2_{{ $language->lang_code }}" class="form-label">Açıklama 2 ({{ $language->lang_code }})</label>
                                            <textarea class="form-control" id="description_2_{{ $language->lang_code }}" name="description_2_{{ $language->lang_code }}" rows="3" required>{{ $description_2[$language->lang_code] ?? '' }}</textarea>
                                        </div>
                                        <!-- seo_title -->
                                        <div class="mb-3">
                                            <label for="seo_title_{{ $language->lang_code }}" class="form-label">SEO Başlığı ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control seo_title" id="seo_title_{{ $language->lang_code }}" name="seo_title_{{ $language->lang_code }}" value="{{ $seo_title[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <!-- seo_description -->
                                        <div class="mb-3">
                                            <label for="seo_description_{{ $language->lang_code }}" class="form-label">SEO Açıklaması ({{ $language->lang_code }})</label>
                                            <textarea class="form-control seo_description" id="seo_description_{{ $language->lang_code }}" name="seo_description_{{ $language->lang_code }}" rows="3" required>{{ $seo_description[$language->lang_code] ?? '' }}</textarea>
                                        </div>
                                        <!-- seo_keywords -->
                                        <div class="mb-3">
                                            <label for="seo_keywords_{{ $language->lang_code }}" class="form-label">SEO Anahtar Kelimeleri ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="seo_keywords_{{ $language->lang_code }}" name="seo_keywords_{{ $language->lang_code }}" value="{{ $seo_keywords[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <!-- sort --> 
                                        <div class="mb-3">
                                            <label for="sort_{{ $language->lang_code }}" class="form-label">Sıralama ({{ $language->lang_code }})</label>
                                            <input type="number" class="form-control" id="sort_{{ $language->lang_code }}" name="sort_{{ $language->lang_code }}" value="0" min="0" required >
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                                <a href="{{ route('admin.club.index') }}" class="btn btn-secondary">Geri Dön</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection