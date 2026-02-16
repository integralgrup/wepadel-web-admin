@extends('admin.layouts.main')
@section('title', 'Kıta Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Kıta Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb item active" aria-current="page">Kıta Yönetimi</li>
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
                        foreach($continents as $item){
                            $continent_id = $item->id;
                            $title[$item->lang] = $item->title;
                            $seo_url[$item->lang] = $item->seo_url;
                            $class[$item->lang] = $item->class;
                            $sort[$item->lang] = $item->sort;

                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.continent.store', $continent_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <input type="hidden" name="continent_id" value="{{ $continent_id }}">
                                <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <!-- title --> 
                                        <div class="form-group">
                                            <label for="title_{{ $language->lang_code }}">Başlık ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" name="title_{{ $language->lang_code }}" class="form-control" id="title_{{ $language->lang_code }}" value="{{ $title[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <!-- seo_url -->
                                        <div class="form-group">
                                            <label for="seo_url_{{ $language->lang_code }}">SEO URL ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" name="seo_url_{{ $language->lang_code }}" class="form-control" id="seo_url_{{ $language->lang_code }}" value="{{ $seo_url[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- class -->
                                        <div class="form-group">
                                            <label for="class_{{ $language->lang_code }}">Class ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" name="class_{{ $language->lang_code }}" class="form-control" id="class_{{ $language->lang_code }}" value="{{ $class[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- sort -->
                                        <div class="form-group">
                                            <label for="sort_{{ $language->lang_code }}">Sıralama ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="number" name="sort_{{ $language->lang_code }}" class="form-control" id="sort_{{ $language->lang_code }}" value="{{ $sort[$language->lang_code] ?? 0 }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                                <a href="{{ route('admin.continent.index') }}" class="btn btn-secondary">Geri Dön</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection