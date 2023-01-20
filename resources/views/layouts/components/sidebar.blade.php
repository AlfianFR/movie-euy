<aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background-color: rgb(0, 0, 0)" >
    <!-- Brand Logo -->
    <a href="https://friv.com"  target="_blank" class="brand-link">
      <img src="{{asset('assets/dist/img/hayam.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">yandel</span>
    </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('assets/dist/img/user8-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="https://krunker.io" class="d-block" target="_blank">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Daftar Menu
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p></p>
                </a>

            <li class="nav-item"> --}}
                {{-- <a href="{{ url('/admin/genre') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Genre Film</p>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ url('/admin/tahun_rilis') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>tahun Rilis</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/casting') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Casting</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/movie') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Movie</p>
                </a>
            </li>
             </li>
            <li class="nav-item">
                <a href="{{ url('/admin/profile') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Me</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>

</aside>
