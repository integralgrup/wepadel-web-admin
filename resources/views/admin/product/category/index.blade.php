@extends('admin.layouts.main')
@section('title', 'Ürün Kategori Listesi')

@section('content')

<?php 
// get id parameter from route
$id = request()->route('id');
$imageId = request()->route('imageId');
?>

<!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Ürün Kategori Listesi</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Anasayfa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ürün Kategori Yönetimi</li>
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
                            <h5 class="card-title mb-0">Ürün Kategori Listesi</h5>
                            <a href="{{ route('admin.product.category.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus"></i> Ekle
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Başlık</th>
                                    <th style="width: 350px;">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody class="connectedSortable" table_name="product_category" column_name="category_id">
                                @foreach($categories as $key => $item)
                                    <tr  data-id="{{$item->category_id}}">
                                        <td>
                                            <i class="bi bi-list"></i>
                                        </td>
                                        <td>
                                            {{ $item->title }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.product.category.edit', [$item->category_id]) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Düzenle
                                            </a>
                                            <form action="{{ route('admin.product.category.destroy', [$item->category_id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu içeriği silmek istediğinize emin misiniz?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @if($item->children)
                                        @foreach($item->children as $child)
                                            <tr  data-id="{{$child->category_id}}" class="child-row">
                                              <td>
                                                <i class="bi bi-list"></i>
                                              </td>
                                              <td> <!-- bullet icon--> 
                                                &nbsp; &nbsp; - {{ $child->title }}</td>
                                              <td>
                                                <a href="{{ route('admin.product.category.edit', $child->category_id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i>  Düzenle</a>
                                                <form action="{{ route('admin.product.category.destroy', $child->category_id) }}" method="POST" style="display:inline;">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu içeriği silmek istediğinize emin misiniz?')"><i class="bi bi-trash"></i></button>
                                                </form>
                                              </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <!--end::App Content-->
@endsection
