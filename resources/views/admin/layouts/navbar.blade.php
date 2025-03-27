<header class="app-header">
    <nav class="main-header !h-[3.75rem]" aria-label="Global">
        <div class="main-header-container ps-[0.725rem] pe-[1rem] ">

            <div class="header-content-left">
                <!-- Start::header-element -->
                <div class="header-element">
                    {{-- <div class="horizontal-logo">
                        <a href="index.html" class="header-logo">
                            <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo"
                                class="desktop-logo">
                            <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo"
                                class="toggle-logo">
                            <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo"
                                class="desktop-dark">
                            <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo"
                                class="toggle-dark">
                            <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo"
                                class="desktop-white">
                            <img src="build/assets/images/brand-logos/toggle-white.png" alt="logo"
                                class="toggle-white">
                        </a>
                    </div> --}}
                </div>
                <!-- End::header-element -->
                <!-- Start::header-element -->
                <div class="header-element md:px-[0.325rem] !items-center">
                    <!-- Start::header-link -->
                    <a aria-label="Hide Sidebar"
                        class="sidemenu-toggle animated-arrow  hor-toggle horizontal-navtoggle inline-flex items-center"
                        href="javascript:void(0);"><span></span></a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->
            </div>

            <div class="header-content-right">

                <!-- Header Profile -->
                <div
                    class="header-element md:!px-[0.65rem] px-2 hs-dropdown !items-center ti-dropdown [--placement:bottom-left]">

                    <button id="dropdown-profile" type="button"
                        class="hs-dropdown-toggle ti-dropdown-toggle !gap-2 !p-0 flex-shrink-0 sm:me-2 me-2 !rounded-full !shadow-none text-xs align-middle !border-0 !shadow-transparent ">
                        <img class="inline-block rounded-full "
                            src="{{ asset('assets/admin/assets/build/assets/images/faces/9.jpg') }}" width="32"
                            height="32" alt="Image Description">
                    </button>
                    <div class="md:block hidden dropdown-profile">
                        <p class="font-semibold mb-0 leading-none text-[#536485] text-[0.813rem] ">
                            {{ $userList[0]['name'] ?? 'No User' }}
                    </div>
                    <div class="hs-dropdown-menu ti-dropdown-menu !-mt-3 border-0 w-[11rem] !p-0 border-defaultborder hidden main-header-dropdown  pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                        aria-labelledby="dropdown-profile">

                        <ul class="text-defaulttextcolor font-medium dark:text-[#8c9097] dark:text-white/50">
                            <li>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="w-full ti-dropdown-item !text-[0.8125rem] !p-[0.65rem] !gap-x-0 !inline-flex">
                                    <i class="ti ti-logout text-[1.125rem] me-2 opacity-[0.7]"></i> Log Out
                                </a>
                            </li>
                        </ul>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
