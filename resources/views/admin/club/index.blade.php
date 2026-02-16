@extends('admin.layouts.main')
@section('title', 'Kulüp Listesi')

@section('content')

<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Kulüp Listesi</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kulüp Yönetimi</li>
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
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Marka Listesi</h5>
                            <a href="{{ route('admin.club.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus"></i> Ekle
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Görsel</th>
                                    <th>Başlık</th>
                                    <th style="width: 350px;">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clubs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset( getFolder(['uploads_folder', 'club_images_folder']) .'/'. $item->image ) }}" alt="{{ $item->alt }}" style="max-width: 100px; max-height: 100px;">
                                        </td>
                                        <td>{!! $item->title !!}</td>
                                        <td style="display: flex; gap: 5px; flex-wrap: wrap;">
                                            <a href="{{ route('admin.club.edit', $item->club_id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Düzenle
                                            </a>
                                            <a href="{{ route('admin.club.slider1.index', $item->club_id) }}" class="btn btn-info btn-sm">Slider 1</a>
                                            <a href="{{ route('admin.club.slider2.index', $item->club_id) }}" class="btn btn-secondary btn-sm">Slider 2</a>
                                            <a href="{{ route('admin.club.slider3.index', $item->club_id) }}" class="btn btn-dark btn-sm">Slider 3</a>
                                            <a href="{{ route('admin.club.features.index', $item->club_id) }}" class="btn btn-success btn-sm">Özellikler</a>
                                            <a href="{{ route('admin.club.faq.index', $item->club_id) }}" class="btn btn-primary btn-sm">SSS</a>
                                            
                                            <form action="{{ route('admin.club.destroy', $item->club_id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu içeriği silmek istediğinize emin misiniz?')">
                                                    <i class="bi bi-trash"></i> Sil
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection
