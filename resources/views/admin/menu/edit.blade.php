@extends('admin.layouts.main')
@section('title', 'Menü Güncelleme')

@section('content')
<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Menü Güncelleme</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menü Yönetimi</li>
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
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $language->lang_code }}-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $language->lang_code }}"
                                            type="button" role="tab" aria-controls="tab-{{ $language->lang_code }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        <img src="{{ $language->domain .'/'. getFolder(['uploads_folder', 'images_folder'], $language->lang_code) .'/'.$language->flag_image }}" alt="{{ $language->title }}" style="width: 20px; margin-right: 5px;"> {{ strtoupper($language->lang_code) }}

                                    </button>
                                </li>
                            @endforeach 
                        </ul>
                    </div>
                    <?php 
                        foreach($menu_items as $menu){
                            $menu_id = $menu->menu_id;
                            $parent_menu_id = $menu->parent_menu_id;
                            $title[$menu->lang] = $menu->title;
                            $seo_url[$menu->lang] = $menu->seo_url;
                            $image[$menu->lang] = $menu->image;
                            $alt[$menu->lang] = $menu->alt;
                            $menu_type[$menu->lang] = $menu->menu_type;
                            $page_type[$menu->lang] = $menu->page_type;
                            $sort[$menu->lang] = $menu->sort;
                        }

                        //dd($title);
                    ?>
                    <div class="card-body">
                        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content" id="myTabContent">
                            @foreach($languages as $key => $language)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{$language->lang_code}}" role="tabpanel" aria-labelledby="tab{{$language->lang_code}}-tab">
                                    <div class="card-body" style="display:grid; grid-template-columns: 1fr 1fr; gap: 20px;">    
                                        <input type="hidden" name="lang_{{$language->lang_code}}" value="{{$language->lang_code}}">
                                        <input type="hidden" name="menu_id" value="{{ $menu_id }}">
                                        <!-- Page Type Dropdown -->
                                        <div class="mb-3">
                                            <label for="page_type_{{$language->lang_code}}" class="form-label">Sayfa Türü ({{ $language->lang_code }})</label>
                                            <select name="page_type_{{$language->lang_code}}" id="page_type_{{$language->lang_code}}" class="form-select">
                                                <option value="">Seçiniz</option>
                                                <option value="about" {{ $page_type[$language->lang_code] == 'about' ? 'selected' : '' }}>Kurumsal</option>
                                                <option value="contact" {{ $page_type[$language->lang_code] == 'contact' ? 'selected' : '' }}>İletişim</option>
                                                <option value="product" {{ $page_type[$language->lang_code] == 'product' ? 'selected' : '' }}>Ürün</option>
                                                <option value="product_category" {{ $page_type[$language->lang_code] == 'product_category' ? 'selected' : '' }}>Ürün Kategorisi</option>
                                                <option value="brand" {{ $page_type[$language->lang_code] == 'brand' ? 'selected' : '' }}>Markalar</option>
                                                <option value="blog" {{ $page_type[$language->lang_code] == 'blog' ? 'selected' : '' }}>Blog</option>
                                                <option value="club" {{ $page_type[$language->lang_code] == 'club' ? 'selected' : '' }}>Kulüp</option>
                                                <option value="project" {{ $page_type[$language->lang_code] == 'project' ? 'selected' : '' }}>Proje</option>
                                                <option value="contact" {{ $page_type[$language->lang_code] == 'contact' ? 'selected' : '' }}>İletişim</option>
                                                <option value="page" {{ $page_type[$language->lang_code] == 'page' ? 'selected' : '' }}>Özel Sayfa</option>
                                            </select>
                                        </div>
                                        <!-- Parent Menu Dropdown -->
                                        <div class="mb-3">
                                            <label for="parent_menu_id_{{$language->lang_code}}" class="form-label">Üst Menü ({{ $language->lang_code }})</label>
                                            <select name="parent_menu_id_{{$language->lang_code}}" id="parent_menu_id_{{$language->lang_code}}" class="form-select">
                                                <option value="0">Seçiniz</option>
                                                @foreach($parentMenus as $parentMenu)
                                                    <option value="{{ $parentMenu->menu_id }}" {{ $parentMenu->menu_id == $parent_menu_id ? 'selected' : '' }}>{{ $parentMenu->title }}</option>
                                                    @if($parentMenu->children)
                                                        @foreach($parentMenu->children as $childMenu)
                                                            <option value="{{ $childMenu->menu_id }}" {{ $childMenu->menu_id == $parent_menu_id ? 'selected' : '' }}>-- {{ $childMenu->title }}</option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Title -->
                                        <div class="mb-3">
                                            <label for="title_{{$language->lang_code}}" class="form-label">Başlık ({{ $language->lang_code }})<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="title_{{$language->lang_code}}" name="title_{{$language->lang_code}}" value="{{ $title[$language->lang_code] }}" required>
                                        </div>
                                        <!-- Image -->
                                        <div class="mb-3" <?=$menu->menu_type == 'footer' ? 'style="display: none;"' : ''?>>
                                            <label for="image_{{$language->lang_code}}" class="form-label">Resim ({{ $language->lang_code }})</label>
                                            <input type="file" class="form-control" id="image_{{$language->lang_code}}" name="image_{{$language->lang_code}}" accept="image/*">
                                            @if($image[$language->lang_code])
                                                <input type="hidden" class="form-control mt-2" name="old_image_{{$language->lang_code}}" value="{{ $image[$language->lang_code] }}" readonly>
                                                <img src="{{ $language->domain .'/'. getFolder(['uploads_folder', 'images_folder'], $language->lang_code) .'/'.$image[$language->lang_code] }}" alt="Menu Image" class="img-thumbnail mt-2" style="max-width: 200px;">
                                            @endif
                                        </div>
                                        <!-- SEO URL -->
                                        <div class="mb-3">
                                            <label for="seo_url_{{$language->lang_code}}" class="form-label">SEO URL ({{ $language->lang_code }})<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="seo_url_{{$language->lang_code}}" name="seo_url_{{$language->lang_code}}" value="{{ $seo_url[$language->lang_code] }}" required>
                                        </div>
                                        
                                        <!-- Alt Text -->
                                        <div class="mb-3" <?=$menu->menu_type == 'footer' ? 'style="display: none;"' : ''?>>
                                            <label for="alt_{{$language->lang_code}}" class="form-label">Alt Text ({{ $language->lang_code }})<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="alt_{{$language->lang_code}}" name="alt_{{$language->lang_code}}" value="{{ $alt[$language->lang_code] }}" >
                                        </div>
                                        <!-- Menu Type -->
                                        <div class="mb-3">
                                            <label for="menu_type_{{$language->lang_code}}" class="form-label">Menü Türü ({{ $language->lang_code }})<span class="text-danger">*</span></label>
                                            <select class="form-select" id="menu_type_{{$language->lang_code}}" name="menu_type_{{$language->lang_code}}" required>
                                                <option value="header" {{ $menu->{'menu_type'} == 'header' ? 'selected' : '' }}>Header</option>
                                                <option value="footer" {{ $menu->{'menu_type'} == 'footer' ? 'selected' : '' }}>Footer</option>
                                                <option value="sidebar" {{ $menu->{'menu_type'} == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
                                            </select>
                                        </div>
                                        <!-- Sort Order -->
                                        <div class="mb-3">
                                            <label for="sort_{{$language->lang_code}}" class="form-label">Sıralama ({{ $language->lang_code }})</label>
                                            <input type="number" class="form-control" id="sort_{{$language->lang_code}}" name="sort_{{$language->lang_code}}" value="{{ $sort[$language->lang_code] }}" min="0">
                                        </div>
                                        <!-- Active Status -->
                                        <!--<div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="isActive_{{$language->lang_code}}" name="isActive_{{$language->lang_code}}" value="1" {{ $menu->{'isActive'} ? 'checked' : '' }}>
                                            <label class="form-check-label" for="isActive_{{$language->lang_code}}">Aktif</label>
                                        </div>-->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection