@extends('back.layouts.master')
@section('title','Kullanıcı Listeleme')
@section('content')
<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>Kullanıcı Adı</th>
            <th>Kullanıcı Email</th>
            <th>Kullanıcı Şifre</th>
            <th>Kullanıcı Statüsü</th>
            <th>Kullanıcı Düzenle</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
            <td>{{$user->user_name}}</td>
            <td>{{$user->user_email}}</td>
            <td>{{$user->user_password}}</td>
            <td>
              @if ($user->user_status==1)
                <span class="badge bg-success">Süper Admin</span>
              @else
                <span class="badge bg-info">Admin</span>
              @endif
            </td>
            <td><button user-id="{{$user->user_id}}" title="Kullanıcıyı Düzenle" type="button" class="btn btn-outline-info edit_click" data-bs-toggle="modal" data-bs-target="#inlineForm">
                    Düzenle
                </button></td>
        </tr>
      @endforeach
    </tbody>
</table>
<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Kullanıcı Düzenle</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="col-md-4">
                        <label>Kullanıcı Adı: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" id="user_name" class="form-control" name="user_name" value="{{old('user_name')}}" placeholder="Kullanıcı Adınızı Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Kullanıcı Email: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="email" id="user_email" class="form-control" name="user_email" placeholder="Kullanıcı Email'inizi Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Kullanıcı Şifre: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="password" id="user_password" class="form-control" name="user_password" placeholder="Kullanıcı Şifrenizi Giriniz">
                    </div>
                    <div class="col-md-4">
                        <label>Kullanıcı Statüsü: </label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="number" id="user_status" class="form-control" name="user_status" placeholder="1: Süper Admin, 0: Admin">
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
