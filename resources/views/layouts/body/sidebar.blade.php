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

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-users"></i>
                    <span>User Managment</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('user.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('user.create') }}">Create</x-menu-item>
                </ul>
            </li>

            <li class="dropdown ">
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
                    <i class="fas fa-random"></i>
                    <span>Tag Managment</span>
                </a>
                <ul class="dropdown-menu">
                    <x-menu-item link="{{ route('tag.index') }}">Lists</x-menu-item>
                    <x-menu-item link="{{ route('tag.create') }}">Create</x-menu-item>
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


        </ul>
    </aside>
</div>
