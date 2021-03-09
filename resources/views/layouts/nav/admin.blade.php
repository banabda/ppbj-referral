<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="logo" class="w-54" src="{{ asset('pron/img/logo_putih.png') }}">
        <!--<span class="hidden xl:block text-white text-lg ml-3"> LPKN </span>-->
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="side-menu @if (Route::currentRouteName() == 'admin.dashboard') side-menu--active @else side-menu @endif">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users_affiliasi') }}" class="side-menu @if (Route::currentRouteName() == 'admin.users_affiliasi') side-menu--active @else side-menu @endif">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Peserta Affiliasi</div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->