@extends('admin.layouts.main')
@section('title', 'Sertifika Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Sertifika Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb item active" aria-current="page">Sertifika Yönetimi</li>
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
                        foreach($certificates as $certificate){
                            $certificate_id[$certificate->lang] = $certificate->certificate_id;
                            $url[$certificate->lang] = $certificate->url;
                            $title[$certificate->lang] = $certificate->title;
                            $pdf_file[$certificate->lang] = $certificate->pdf_file;
                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.certificate.store', $certificate_id[$language->lang_code]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <input type="hidden" name="certificate_id" value="{{ $certificate_id[$language->lang_code] }}">
                                <input type="hidden" name="lang" value="{{ $language->lang_code }}">
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <div class="form-group">
                                            <label for="title_{{ $language->lang_code }}">Başlık ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" value="{{ $title[$language->lang_code] }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="url_{{ $language->lang_code }}">URL ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" class="form-control" id="url_{{ $language->lang_code }}" name="url_{{ $language->lang_code }}"  value="{{ env('HTTP_DOMAIN').'/'. getFolder(['certificate_folder'], $language->lang_code) . '/' . $pdf_file[$language->lang_code] }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="pdf_file_{{ $language->lang_code }}">PDF Dosyası ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="file" class="form-control" id="pdf_file_{{ $language->lang_code }}" name="pdf_file_{{ $language->lang_code }}">
                                            @if($pdf_file[$language->lang_code])
                                                <a href="{{ env('HTTP_DOMAIN').'/'. getFolder(['certificate_folder'], $language->lang_code) . '/' . $pdf_file[$language->lang_code] }}" target="_blank">PDF Dosyasını Görüntüle</a>
                                                <input type="hidden" class="form-control" id="old_pdf_file_{{ $language->lang_code }}" name="old_pdf_file_{{ $language->lang_code }}" value="{{ $pdf_file[$language->lang_code] }}" readonly>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                                <a href="{{ route('admin.certificate.index') }}" class="btn btn-secondary">Geri Dön</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection