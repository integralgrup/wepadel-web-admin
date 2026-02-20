@extends('admin.layouts.main')
@section('title', 'Ürün Özellik Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ürün Özellik(Feature) Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb item active" aria-current="page">Ürün Özellik Yönetimi</li>
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
                        foreach($features as $item){
                            $feature_id = $item->feature_id;
                            $product_id = $item->product_id;
                            $title[$item->lang] = $item->title;
                            $description[$item->lang] = $item->description;
                            $image[$item->lang] = $item->image;
                            $alt[$item->lang] = $item->alt;
                            $icon[$item->lang] = $item->icon;
                            $sort[$item->lang] = $item->sort;

                        }
                    ?>
                    <div class="card-body">
                        <?php $required = $language->lang_code == 'en' ? 'required' : ''; ?>
                        <form action="{{ route('admin.product.features.store', $product_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <input type="hidden" name="feature_id" value="{{ $feature_id }}">
                                <input type="hidden" name="product_id" value="{{ $product_id }}">
                                <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body grids-4">
                                       
                                        <div>
                                             <div class="mb-3">
                                                <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ strtoupper($language->lang_code) }})</label>
                                                <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" value="{{ $title[$language->lang_code] }}" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="description_{{ $language->lang_code }}" class="form-label">Açıklama ({{ strtoupper($language->lang_code) }})</label>
                                                <textarea class="form-control" id="description_{{ $language->lang_code }}" name="description_{{ $language->lang_code }}" rows="3" >{{$description[$language->lang_code]}}</textarea>
                                            </div>
                                           
                                        </div>
                                        <!-- image -->
                                        <div >
                                            <div class="mb-3">
                                                <label for="image_{{ $language->lang_code }}" class="form-label">Görsel ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="image_{{ $language->lang_code }}" name="image_{{ $language->lang_code }}"  accept="image/*" >
                                                @if($image[$language->lang_code])
                                                    <img src="{{ $language->domain .'/'.  getFolder(['uploads_folder','product_images_folder'], $language->lang_code) . '/' . $image[$language->lang_code] }}" alt="" style="width: 100px; margin-top: 10px;">
                                                    <input type="hidden"  name="old_image_{{ $language->lang_code }}" value="{{ $image[$language->lang_code] }}">
                                                @endif
                                            </div>
                                            <div>
                                                <label for="alt_{{ $language->lang_code }}" class="form-label">Alt Metin ({{ $language->lang_code }})</label>
                                                <input type="text" class="form-control" id="alt_{{ $language->lang_code }}" name="alt_{{ $language->lang_code }}" value="{{ $alt[$language->lang_code] }}" >
                                            </div>
                                        </div>

                                        <!-- image -->
                                        <div class="mb-3">
                                                <label for="icon_{{ $language->lang_code }}" class="form-label">Görsel ({{ $language->lang_code }})</label>
                                                <input type="file" class="form-control" id="icon_{{ $language->lang_code }}" name="icon_{{ $language->lang_code }}"  accept="image/*" >
                                                @if($image[$language->lang_code])
                                                    <img src="{{ $language->domain .'/'.  getFolder(['uploads_folder','product_images_folder'], $language->lang_code) . '/' . $icon[$language->lang_code] }}" alt="" style="width: 100px; margin-top: 10px;">
                                                    <input type="hidden"  name="old_icon_{{ $language->lang_code }}" value="{{ $icon[$language->lang_code] }}">
                                                @endif
                                            </div>

                                        <div class="mb-3">
                                            <label for="sort_{{ $language->lang_code }}" class="form-label">Sıralama ({{ strtoupper($language->lang_code) }})</label>
                                            <input type="number" class="form-control" id="sort_{{ $language->lang_code }}" name="sort_{{ $language->lang_code }}" value="{{ $sort[$language->lang_code] ?? 0 }}" >
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                                <a href="{{ route('admin.product.features.index', $product_id) }}" class="btn btn-secondary">Geri Dön</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection