@extends('back.layouts.master')
@section('title','Ürün Ekleme')
@section('content')
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ürünün Adı</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="product_name" class="form-control" name="product_name" placeholder="Ürünün Adı Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Açıklaması</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="product_description" class="form-control" name="product_description" placeholder="Ürünün Açıklamasını Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Fiyatı</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="product_price" class="form-control" name="product_price" placeholder="Ürünün Fiyatını Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Stok Miktarı</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="product_stok" class="form-control" name="product_stok" placeholder="Ürünün Stok Miktarını Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Vitrin Durumu</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="product_showcase" class="form-control" name="product_showcase" placeholder="Ürünün Vitrin Durumunu Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Kategorisi</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="product_category_id" class="form-control" name="product_category_id" placeholder="Ürünün Kategorisini Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Rengi</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="product_color" class="form-control" name="product_color" placeholder="Ürünün Rengini Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Bedeni</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="product_size" class="form-control" name="product_size" placeholder="Ürünün Bedenini Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Ürünün Markası</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="product_brand" class="form-control" name="product_brand" placeholder="Ürünün Markasını Giriniz">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Ürünü Ekle</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
