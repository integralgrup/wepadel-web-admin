@extends('admin.layouts.main')
@section('title', 'Ürün Galeri Görseli Ekleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ürün Galeri Görseli Ekleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ürün Galeri Yönetimi</li>
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
                        <form action="{{ route('admin.product.gallery.store', $product->product_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                @foreach($languages as $language)
                                <?php $required = $language->lang_code == 'en' ? 'required' : ''; ?>
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $language->id }}" role="tabpanel" aria-labelledby="tab-{{ $language->id }}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                                        <input type="hidden" name="lang_{{ $language->lang_code }}" value="{{ $language->lang_code }}">
                                        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                        <!-- title --> 
                                        <div class="mb-3">
                                            <label for="title_{{ $language->lang_code }}" class="form-label">Başlık ({{ $language->lang_code }})</label>
                                            <input type="text" class="form-control" id="title_{{ $language->lang_code }}" name="title_{{ $language->lang_code }}" {{ $required }}>
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