<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <img src="{{ asset ('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">CLSIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset ('assets/dist/img/user-bw.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><small>logged in as {{Auth::user()->name}}<span class="user_name"><strong></strong></span></small></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{ Request::is('home*') ? 'active': '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">LIVESTOCK MANAGEMENT</li>
                <li class="nav-item has-treeview {{ Request::is('admin/category*') ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active': '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('master/vendor*') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vendors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('master/product*') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ Request::is('transaction*') ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ Request::is('transaction*') ? 'active': '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Transactions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('transaction/purchase-order*') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Purchase Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('transaction/sales*') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sales Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('transaction/stock*') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-header">PROFILE</li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-door-open text-danger"></i>
                        <p class="text">Logout</p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
