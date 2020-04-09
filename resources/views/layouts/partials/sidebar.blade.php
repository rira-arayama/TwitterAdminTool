<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-user-astronaut"></i>
            </div>
            <div class="sidebar-brand-text mx-3">
                <span>{{ config('app.name') }}</span>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @auth
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="#">
                    <i class=" fas fa-tasks"></i>
                    <span>Task Schedule</span>
                </a>
            </li>
            @endauth
        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>
