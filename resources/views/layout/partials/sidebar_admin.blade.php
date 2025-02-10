<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <h1 class="sidebar-logo-text">BLOG APP</h1>
        </div>
        <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title m-0">
                    <h6>Home</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/index_admin') ? 'active' : '' }}"
                        href="{{ url('admin/index_admin') }}"><i class="fe fe-grid "></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <h6>Content</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/users*') ? 'active' : '' }}"
                        href="{{ route('admin.users.index') }}"><i class="fa-solid fa-users"></i> <span>Manajemen Pengguna</span></a>
                </li>

                <li>
                    <a class="{{ Request::is('admin/posts*') ? 'active' : '' }}"
                        href="{{ url('/posts') }}"><i class="fa-solid fa-pen"></i> <span>Manajemen Postingan</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/comments*') ? 'active' : '' }}"
                        href="{{ url('/comments') }}"><i class="fa-solid fa-comments"></i> <span>Manajemen Komentar</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/reports') ? 'active' : '' }}"
                        href="{{ url('admin/reports') }}"><i class="fa-solid fa-tags"></i> <span>Kategori Postingan</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/contact-messages*') ? 'active' : '' }}"
                        href="{{ url('admin/contact-messages') }}"><i class="fa-solid fa-chart-line"></i> <span>Statistik</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/contact-messages*') ? 'active' : '' }}"
                        href="{{ url('admin/contact-messages') }}"><i class="fa-solid fa-file-alt"></i> <span>Laporan</span></a>
                </li>
                <li class="menu-title">
                    <h6>Settings</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/admin*') ? 'active' : '' }}"
                        href="{{ url('admin/admin') }}"><i class="fa-solid fa-user"></i> <span>Profile</span></a>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fe fe-log-out"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<!-- Add this CSS to your stylesheet or in a <style> tag -->
<style>
.sidebar-logo-text {
    color: aliceblue;
    font-size: 37px;
    font-weight: bold;
    text-transform: uppercase;
    font-family: 'ArtBrush', sans-serif;
}
</style>
