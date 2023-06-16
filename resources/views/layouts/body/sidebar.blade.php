<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Company Name</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">CP</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('home') }}">Home</x-menu-item>
                </ul>
            </li>

            <li class="dropdown {{ Request::is('auto-sysem') ? 'active' : '' }} ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-random"></i>
                    <span>Category Managment</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('category.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('category.create') }}">Create</x-menu-item>
                </ul>
            </li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-portrait"></i>
                    <span>Job Managment</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('job.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('job.create') }}">Create</x-menu-item>
                </ul>
            </li>

            {{-- <li
                class="dropdown {{ Request::is('enduser') ? 'active' : '' }}  {{ Request::is('enduser/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa fa-user"></i>
                    <span>EndUsers</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('enduser.index') }}">Lists</x-menu-item>
                    @if (env('APP_ENV') !== 'production')
                        <x-menu-item link="{{ route('enduser.create') }}">Create</x-menu-item>
                    @endif
                </ul>
            </li>

            <li class="dropdown {{ Request::is('auto-sysem') ? 'active' : '' }} ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-random"></i>
                    <span>Auto System</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('auto-system.index') }}">Lists</x-menu-item>
                    @if (env('APP_ENV') !== 'production')
                        <x-menu-item link="{{ route('auto-system.create') }}">Create</x-menu-item>
                    @endif

                </ul>
            </li>

            <li
                class="dropdown {{ Request::is('currency') ? 'active' : '' }}  {{ Request::is('currency/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fab fa-bitcoin"></i>
                    <span>Currency</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('currency.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('currency.create') }}">Create</x-menu-item>
                </ul>
            </li>

            <li
                class="dropdown {{ Request::is('cfdtype') ? 'active' : '' }}  {{ Request::is('cfdtype/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-x-ray"></i>
                    <span>CFD Type</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('cfdtype.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('cfdtype.create') }}">Create</x-menu-item>
                </ul>
            </li>

            <li
                class="dropdown {{ Request::is('mining-type') ? 'active' : '' }}  {{ Request::is('mining-type/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-university"></i>
                    <span>Steaking</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('mining-type.index') }}">Steaking Type</x-menu-item>
                    <x-menu-item link="{{ route('ongoing.completeLists') }}">Complete Lists</x-menu-item>
                    <x-menu-item link="{{ route('ongoing.index') }}">Ongoing Lists</x-menu-item>
                </ul>
            </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getcodiepie.com/docs" onclick="document.getElementById('logOut').submit()"
                    class="btn btn-danger btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i>
                    Logout</a>

                <form class="d-none" id="logOut" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div> --}}
        </ul>
    </aside>
</div>
