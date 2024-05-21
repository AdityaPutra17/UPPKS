<aside class="main-sidebar bg-white elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link text-decoration-none ">
        <img src="{{asset('assets/img/logoPNG.png')}}" alt="Logo Siumi" width="70px">
        <span class="brand-text fw-bold">UPPKS Matahari</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-dark text-decoration-none ">Admin</a>
            </div>
        </div>
        <hr class="border-2">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/product" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Data Produk </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/event" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Data Event
                        </p>
                    </a>
                </li>
                <hr class="border-2 ">
                <li class="nav-item">
                    <form action="/logout" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="text-danger  border-0 bg-transparent ">
                            <i class="fa-solid fa-arrow-right-from-bracket">
                            </i>
                            <p class="text-danger ">SignOut</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
