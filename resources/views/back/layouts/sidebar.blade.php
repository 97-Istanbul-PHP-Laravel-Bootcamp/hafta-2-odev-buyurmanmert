<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><img style="width: 163px; height: 50px; object-fit: cover; margin-right: 20px;" src="{{asset('back')}}/images/logo/Ticaret.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-card-list"></i>
                        <span>Kategori Yönetimi</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item active">
                            <a href="{{route('categoryList')}}">Kategorileri Listele</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('categoryAdd')}}">Kategori Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item active has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-box-seam"></i>
                        <span>Ürün Yönetimi</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item active">
                            <a href="{{route('productList')}}">Ürünleri Listele</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('productAdd')}}">Ürün Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item active has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Kullanıcı Yönetimi</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item active">
                            <a href="{{route('usersList')}}">Kullanıcıları Listele</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('usersAdd')}}">Kullanıcı Ekle</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item active has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-credit-card-2-front-fill"></i>
                        <span>Satış Yönetimi</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item active">
                            <a href="{{route('cartList')}}">Satışları Listele</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Satış Görüntüle</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
