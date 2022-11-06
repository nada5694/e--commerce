<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="./assets/Admin/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    {{-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./pages/dashboard.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="dropdown">
          <a class="nav-link" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="list-style: none;   ">
            <li><a href="javascript:void(0)" class="dropdown-item">Create Category</a></li>
            <li><a href="javascript:void(0)" class="dropdown-item">All Categories</a></li>
            <li><a href="javascript:void(0)" class="dropdown-item" style="color: rgb(152, 6, 6);">Deleted Category</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a class="nav-link " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Products</span>
            </a>
            <ul class="dropdown-menu nav-submenu menu-content"  style="list-style: none;   ">
              <li><a href="javascript:void(0)" class="dropdown-item">Create Product</a></li>
              <li><a href="javascript:void(0)" class="dropdown-item">All Products</a></li>
              <li><a href="javascript:void(0)" class="dropdown-item" style="color: rgb(152, 6, 6);">Deleted Product</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="nav-link " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Users</span>
            </a>
            <ul class="dropdown-menu nav-submenu menu-content"  style="list-style: none;   ">
              <li><a href="javascript:void(0)" class="dropdown-item">Create User</a></li>
              <li><a href="javascript:void(0)" class="dropdown-item">All Users</a></li>
              <li><a href="javascript:void(0)" class="dropdown-item" style="color: rgb(152, 6, 6);">Deleted User</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div> --}}

    <div id="mainnav">
        <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>

            <!------------- Start route dashboard ------------->
            <li class="dropdown">
                <a class="nav-link menu-title" href="{{route('dashboard')}}"><i class="fa fa-institution" style="font-size: 130%;"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard (Home)</span></a>
            </li>
            <!------------- End route dashboard ------------->


            <!------------- Start route main website ------------->
            <li class="dropdown">
                <a class="nav-link menu-title" href="{{route('home')}}" target="_blank"><i class="fa fa-home" style="font-size: 150%;"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Website (Home)</span></a>
            </li>
            <!------------- End route main website ------------->

            {{-- @if(auth()->user()->user_type == "admin" || auth()->user()->user_type == "moderator") --}}
                <!------------- Start route users ------------->

                <li class="dropdown">
                    <a class="nav-link menu-title" href="javascript:void(0)">
                        <i class="fa fa-users"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Users</span>
                    </a>
                    <ul class="nav-submenu menu-content" style="">
                        {{-- <li class="dropdown">
                            <span class="drop-down-all-users">All Users</span>
                            <div class="dropdown-content">
                                <a href="javascript:void(0); "class="javascript:void(0);">Admins</a>
                                <a href="javascript:void(0); "class="javascript:void(0);">Moderators</a>
                                <a href="javascript:void(0); "class="javascript:void(0);">Suppliers</a>
                                <a href="javascript:void(0); "class="javascript:void(0);">Customers</a>
                            </div>
                        </li> --}}
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Create User</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">All Users</a></li>
                        <li><a href="javascript:void(0); "class="javascript:void(0);">Customers</a></li>
                        <li><a href="javascript:void(0); "class="javascript:void(0);">Suppliers</a></li>
                        <li><a href="javascript:void(0); "class="javascript:void(0);">Moderators</a></li>
                        <li><a href="javascript:void(0); "class="javascript:void(0);">Admins</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);" style="color: rgb(152, 6, 6);" >Deleted Users</a></li>
                    </ul>
                </li>
                <!------------- End route users ------------->

                <!------------- Start route categories ------------->
                <li class="dropdown">
                    <a class="nav-link menu-title" href="javascript:void(0)">
                        <i class="fa-solid fa-align-justify" style="padding-left: 1.25%;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Categories</span>
                    </a>
                    <ul class="nav-submenu menu-content" style="">
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Create Category</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">All Categories</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);" style="color: rgb(152, 6, 6);">Deleted Categories</a></li>
                    </ul>
                </li>
                <!------------- End route categories ------------->


                <!------------- Start route carts ------------->
                <li class="dropdown">
                    <a class="nav-link menu-title" href="javascript:void(0)">
                        <i class="fa-solid fa-cart-shopping"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Carts</span>
                    </a>
                    <ul class="nav-submenu menu-content" style="">
                        {{-- <li><a href="javascript:void(0);" class="javascript:void(0);">Create Cart</a></li> --}}
                        <li><a href="javascript:void(0);" class="javascript:void(0);">All Carts</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);" style="color: rgb(152, 6, 6);">Deleted Carts</a></li>
                    </ul>
                </li>
                <!------------- End route carts ------------->


                <!------------- Start route products ------------->
                <li class="dropdown">
                    <a class="nav-link menu-title" href="javascript:void(0);">
                        <i class="fa-solid fa-box-open"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Products</span>
                    </a>
                    <ul class="nav-submenu menu-content" style="">
                        <li><a href="{{route('products.create')}}" class="{{route('products.create')}}">Create Product</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">All Products</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">All Clothes</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">All Accessories</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Formal</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Casual</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Sports Wear</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Men</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Women</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);">Kids</a></li>
                        <li><a href="javascript:void(0);" class="javascript:void(0);" style="color: rgb(152, 6, 6);">Deleted Products</a></li>
                    </ul>
                </li>
</aside>
<style>
    .nav-menu {
        border-radius: 0;
        height: calc(100vh - 355px);
        left: -300px;
        z-index: 99;
        -webkit-transition: color 1s ease;
        transition: color 1s ease;
        overflow: hidden;
        overflow-y: auto;
        color: rgba(0, 0, 0, 0);
        padding-bottom: 15px;
    }
    .main-navbar .nav-menu > li:first-child {
        display: none !important;
    }
    .main-navbar .nav-menu > .dropdown {
        display: block;
        float: none;
        width: 100%;
        padding: 0 20px;
    }
</style>
