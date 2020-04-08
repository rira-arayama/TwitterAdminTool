<nav
    class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion {{ config('sidebar.theme.bg-color') }} p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="{{ config('sidebar.theme.bland') }}"></i>
            </div>
            <div class="sidebar-brand-text mx-3">
                <span>{{ config('app.name') }}</span>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">

            @foreach(config('sidebar.links') as $name => $conf)
            <li class="nav-item" role="presentation">
                <a class="nav-link
                {{-- 現在のパスが指定されたルート名を含む場合自動active化 --}}
                @if(request()->segment(1) === $conf['to'])
                    active
                @endif" href="{{ $conf['to'] ? route($conf['to']) : '' }}">
                    <i class="{{ $conf['icon'] }}"></i>
                    <span>{{ $name }}</span>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>
