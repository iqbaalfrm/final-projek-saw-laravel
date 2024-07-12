<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('dashboard.index') }}">
                        <span style="font-size: 1.3rem; font-weight: bold;">GURUKU - SMKASY</span>
                    </a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x bi-middle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                
                <li class="sidebar-item active">
                    <a href="{{ route('dashboard.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="{{ route('kriteria.index') }}" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Kriteria</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('alternatif.index') }}" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Alternatif</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('nilai.create') }}" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('hitung.index') }}" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Hasil SAW</span>
                    </a>
                </li>

                @auth
                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</div>
