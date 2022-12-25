@include('admins.layouts.header')
@include('admins.layouts.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('admins.layouts.navbar')
    <div class="container-fluid py-4">
        @yield('content')
    </div>
</main>
@include('admins.layouts.footer')
