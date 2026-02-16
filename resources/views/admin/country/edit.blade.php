@extends('admin.layouts.main')
@section('title', 'Ülke Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ülke Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb item active" aria-current="page">Ülke Yönetimi</li>
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
                        foreach($countries as $item){
                            $country_id = $item->country_id;
                            $title[strtolower($item->lang)] = $item->title;
                            $code[strtolower($item->lang)] = $item->code;
                            $left[strtolower($item->lang)] = $item->left;
                            $top[strtolower($item->lang)] = $item->top;
                            $continent_id = $item->continent_id;
                            $sort[strtolower($item->lang)] = $item->sort;

                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.country.store', $country_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                <input type="hidden" name="country_id" value="{{ $country_id }}">
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <div class="mb-3">
                                            <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" value="{{ $title[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="code_{{ $language->lang_code }}" class="form-label">Kod ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" class="form-control" id="code_{{ $language->lang_code }}" name="code_{{ $language->lang_code }}" value="{{ $code[$language->lang_code] ?? '' }}" required>
                                        </div>
                                        <!-- continent_id selectbox -->
                                        <div class="mb-3">
                                            <label for="continent_id_{{ $language->lang_code }}" class="form-label">Kıta ({{ strtoupper($language->lang_code) }})</label>
                                            <select class="form-select" id="continent_id_{{ $language->lang_code }}" name="continent_id_{{ $language->lang_code }}" required>
                                                <option value="">Seçiniz</option>
                                                @foreach($continents as $continent)
                                                    <option value="{{ $continent->continent_id }}" {{ $continent->continent_id == $countries[0]->continent_id ? 'selected' : '' }}>{{ $continent->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- left --> 
                                        <div class="mb-3">
                                            <label for="left_{{ $language->lang_code }}" class="form-label">Left ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" class="form-control" id="left_{{ $language->lang_code }}" name="left_{{ $language->lang_code }}" required value="{{ $left[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- top -->
                                        <div class="mb-3">
                                            <label for="top_{{ $language->lang_code }}" class="form-label">Top ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" class="form-control" id="top_{{ $language->lang_code }}" name="top_{{ $language->lang_code }}" required value="{{ $top[$language->lang_code] ?? '' }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="sort_{{ $language->lang_code }}" class="form-label">Sıralama ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="number" class="form-control" id="sort_{{ $language->lang_code }}" name="sort_{{ $language->lang_code }}" required value="{{ $sort[$language->lang_code] ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                                <a href="{{ route('admin.country.index') }}" class="btn btn-secondary">Geri Dön</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection