@extends('admin.layouts.main')
@section('title', 'Kulüp Slider 1 Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Kulüp Slider 1 Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb item active" aria-current="page">Kulüp Slider 1 Yönetimi</li>
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
                        foreach($sliders as $item){
                            $slider_id = $item->slider_id;
                            $club_id = $item->club_id;
                            $title[$item->lang] = $item->title;
                            $description[$item->lang] = $item->description;
                            $icon[$item->lang] = $item->icon;
                            $image[$item->lang] = $item->image;
                            $video[$item->lang] = $item->video;
                            $alt[$item->lang] = $item->alt;
                            $sort[$item->lang] = $item->sort;

                        }
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.club.slider1.store', $club_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <input type="hidden" name="slider_id" value="{{ $slider_id }}">
                                <input type="hidden" name="club_id" value="{{ $club_id }}">
                                <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                       
                                        <div class="form-group">
                                            <label for="title_{{ $language->lang_code }}">Başlık ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" name="title_{{ $language->lang_code }}" class="form-control" id="title_{{ $language->lang_code }}" value="{{ $title[$language->lang_code] ?? '' }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description_{{ $language->lang_code }}">Açıklama ({{ strtoupper($language->lang_code) }})</label>
                                            <textarea name="description_{{ $language->lang_code }}" class="form-control" id="description_{{ $language->lang_code }}" rows="4">{{ $description[$language->lang_code] ?? '' }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="icon_{{ $language->lang_code }}">KüçükGörsel ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="file" name="icon_{{ $language->lang_code }}" class="form-control" id="icon_{{ $language->lang_code }}">
                                            @if(isset($icon[$language->lang_code]))
                                                <img src="{{ $language->domain .'/'. getFolder(['uploads_folder','club_images_folder'], $language->lang_code). '/' . $icon[$language->lang_code] }}" alt="{{ $alt[$language->lang_code] }}" style="width: 100px; margin-top: 10px;">
                                                <input type="hidden" class="form-control" id="old_icon_{{ $language->lang_code }}" name="old_icon_{{ $language->lang_code }}" value="{{ $icon[$language->lang_code] }}" readonly>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="image_{{ $language->lang_code }}">Resim ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="file" name="image_{{ $language->lang_code }}" class="form-control" id="image_{{ $language->lang_code }}">
                                            @if(isset($image[$language->lang_code]))
                                                <img src="{{ $language->domain .'/'. getFolder(['uploads_folder','club_images_folder'], $language->lang_code). '/' . $image[$language->lang_code] }}" alt="{{ $alt[$language->lang_code] }}" style="width: 300px; margin-top: 10px;">
                                                <input type="hidden" class="form-control" id="old_image_{{ $language->lang_code }}" name="old_image_{{ $language->lang_code }}" value="{{ $image[$language->lang_code] }}" readonly>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="alt_{{ $language->lang_code }}">Alt Metni ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="text" name="alt_{{ $language->lang_code }}" class="form-control" id="alt_{{ $language->lang_code }}" value="{{ $alt[$language->lang_code] ?? '' }}">
                                        </div>
                                        <!-- video -->
                                        <div class="form-group">
                                            <label for="video_{{ $language->lang_code }}">Video ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="file" name="video_{{ $language->lang_code }}" class="form-control" id="video_{{ $language->lang_code }}">
                                            @if(isset($video[$language->lang_code]))
                                                <video width="320" height="240" controls style="margin-top: 10px;">
                                                  <source src="{{ $language->domain .'/'. getFolder(['uploads_folder','club_images_folder'], $language->lang_code). '/' . $video[$language->lang_code] }}" type="video/mp4">
                                                  Your browser does not support the video tag.
                                                </video>
                                                <input type="hidden" class="form-control" id="old_video_{{ $language->lang_code }}" name="old_video_{{ $language->lang_code }}" value="{{ $video[$language->lang_code] }}" readonly>
                                            @endif
                                        </div>
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
                                <a href="{{ route('admin.club.slider1.index', $club_id) }}" class="btn btn-secondary">Geri Dön</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection