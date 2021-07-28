@extends('back.layouts.master')
@section('title','Kullanıcı Ekleme')
@section('content')
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Kullanıcı Adı</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="user_name" class="form-control" name="user_name" placeholder="Kullanıcı Adınızı Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" id="user_email" class="form-control" name="user_email" placeholder="Kullanıcı Email'inizi Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Şifre</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="user_password" class="form-control" name="user_password" placeholder="Kullanıcı Şifrenizi Giriniz">
                            </div>
                            <div class="col-md-4">
                                <label>Kullanıcı Statüsü</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="user_status" class="form-control" name="user_status" placeholder="1: Süper Admin, 0: Admin">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
