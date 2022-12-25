<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" {{ route('dashboard.index') }}">
            <img src="{{ asset('images/logo1.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Administrator</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/dashboard') || request()->is('admin/dashboard/*') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('dashboard.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/service') || request()->is('admin/service/*') ? 'active bg-gradient-success' : '' }}{{ request()->is('admin/service') || request()->is('admin/service/*') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('service.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Layanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/flow') || request()->is('admin/flow/*') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('flow.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">all_inclusive</i>
                    </div>
                    <span class="nav-link-text ms-1">Alur Proses</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/faq') || request()->is('admin/faq/*') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('faq.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">info</i>
                    </div>
                    <span class="nav-link-text ms-1">FAQ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/profile') || request()->is('admin/profile/*') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('profile.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_circle</i>
                    </div>
                    <span class="nav-link-text ms-1">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/setting') || request()->is('admin/setting/*') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('setting.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">extension</i>
                    </div>
                    <span class="nav-link-text ms-1">Pengaturan</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
