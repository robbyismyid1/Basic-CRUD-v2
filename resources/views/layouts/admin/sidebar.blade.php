<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">BACKEND SITE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">BE</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="/admin/artikel"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manage</li>
            <li class={{ (request()->is('admin/artikel')) ? 'active' : '' }}><a class="nav-link" href="{{ url('/admin/artikel') }}"><i class="fas fa-scroll"></i> <span>Artikel</span></a></li>
            <li
            @if (request()->is('admin/kategori'))
            class="dropdown active"
            @elseif (request()->is('admin/tag'))
            class="dropdown active"
            @elseif (request()->is('admin/days'))
            class="dropdown active"
            @endif>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Komponen Artikel</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/kategori')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/kategori') }}">Kategori</a></li>
                    <li class="{{ (request()->is('admin/tag')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/tag') }}">Tag</a></li>
                </ul>
            </li>
    </aside>
</div>
