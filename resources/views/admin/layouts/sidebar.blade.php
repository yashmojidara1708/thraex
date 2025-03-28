<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('assets/admin/assets/build/assets/images/uploads/logo/' . ($data['logo'] ?? '')) }}" alt="logo"
                class="desktop-logo">
            <img src="{{ asset('assets/admin/assets/build/assets/images/uploads/logo/' . ($data['logo'] ?? '')) }}"
                alt="logo" class="desktop-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->

                <li
                    class="slide {{ request()->routeIs('admin.home') || request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                        <i class="fas fa-desktop side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- End::slide -->
                <li class="slide">
                    <a href="{{ route('admin.services') }}" class="side-menu__item">
                        <i class="fas fa-tools side-menu__icon"></i>
                        <span class="side-menu__label">Services</span>
                    </a>

                </li>

                <li class="slide">
                    <a href="{{ route('admin.settings') }}" class="side-menu__item">
                        <i class="fas fa-cog side-menu__icon"></i>
                        <span class="side-menu__label">Settings</span>
                    </a>

                </li>

                <li class="slide">
                    <a href="{{ route('admin.contact_us') }}" class="side-menu__item">
                        <i class="fas fa-address-book side-menu__icon"></i>
                        <span class="side-menu__label">Contact-Us</span>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
