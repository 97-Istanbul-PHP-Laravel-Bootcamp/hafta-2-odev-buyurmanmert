@extends('back.layouts.master')
@section('title','Ürün Listeleme')
@section('content')
<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>Ürün Adı</th>
            <th>Ürün Açıklaması</th>
            <th>Ürün Fiyatı</th>
            <th>Ürün Stok Sayısı</th>
            <th>Ürün Vitrin Durumu</th>
            <th>Ürün Kategorisi</th>
            <th>Ürün Rengi</th>
            <th>Ürün Bedeni</th>
            <th>Ürün Markası</th>
            <th>Ürün Düzenle</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_description}}</td>
            <td>{{$product->product_price}} TL</td>
            <td>{{$product->product_stok}}</td>
            <td>
              @if ($product->product_showcase==1)
                <span class="badge bg-success">Aktif</span>
              @else
                <span class="badge bg-danger">Pasif</span>
              @endif
            </td>
            <td>{{$product->product_category_id}}</td>
            <td>{{$product->product_color}}</td>
            <td>{{$product->product_size}}</td>
            <td>{{$product->product_brand}}</td>
            <td><button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                    Düzenle
                </button></td>
        </tr>
      @endforeach
    </tbody>
</table>

<!--login form Modal -->
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
                        <label>Ürünün Adı: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="product_name" class="form-control" name="product_name" placeholder="Ürünün Adı Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Açıklaması: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="product_description" class="form-control" name="product_description" placeholder="Ürünün Açıklamasını Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Fiyatı: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="product_price" class="form-control" name="product_price" placeholder="Ürünün Fiyatını Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Stok Miktarı: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="product_stok" class="form-control" name="product_stok" placeholder="Ürünün Stok Miktarını Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Vitrin Durumu: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="product_showcase" class="form-control" name="product_showcase" placeholder="Ürünün Vitrin Durumunu Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Kategorisi: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="product_category_id" class="form-control" name="product_category_id" placeholder="Ürünün Kategorisini Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Rengi: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="product_color" class="form-control" name="product_color" placeholder="Ürünün Rengini Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Bedeni: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="product_size" class="form-control" name="product_size" placeholder="Ürünün Bedenini Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Ürünün Markası: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="product_brand" class="form-control" name="product_brand" placeholder="Ürünün Markasını Giriniz">
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
