@extends('back.layouts.master')
@section('title','Kategorileri Listele')
@section('content')
<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>Kategori Adı</th>
            <th>Kategori Açıklaması</th>
            <th>Kategori Aktifliği</th>
            <th>Kategori Düzenle</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
            <td>{{$category->category_name}}</td>
            <td>{{$category->category_description}}</td>
            <td>
                @if ($category->category_active==1)
                  <span class="badge bg-success">Aktif</span>
                @else
                  <span class="badge bg-danger">Pasif</span>
                @endif
            </td>
            <td><button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                    Düzenle
                </button></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Ürün Düzenle</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="col-md-4">
                        <label>Kategori Adı: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="category_name" class="form-control" name="category_name" placeholder="Kategori Adı">
                    </div>
                    <div class="col-md-4">
                        <label>Kategori Açıklama: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="category_description" class="form-control" name="category_description" placeholder="Kategori Açıklama">
                    </div>
                    <div class="col-md-4">
                        <label>Kategori Aktif: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="category_active" class="form-control" name="category_active" placeholder="1: Aktif, 0: Pasif">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Kapat</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Düzenlemeyi Kaydet</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
