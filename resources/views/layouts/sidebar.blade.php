<nav class="navbar-default navbar-static-side " role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle mb-2" src="{{ asset('img/pp.png') }}" style="width: 80px; height: 80px;"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <!-- <span class="block m-t-xs font-bold">Admin</span> -->
                        <span class="text-muted text-xs block">Administrator <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    ANTI
                </div>
            </li>
            <li class="{{  request()->routeIs('home.*') ? 'active' : '' }}">
                <a href="{{ route('home.index') }}"><i class="fa fa-home" style="font-size:16px" aria-hidden="true"></i> <span class="nav-label">Beranda</span></a>
            </li>
            <li class="{{  request()->routeIs('datates.*') || request()->routeIs('datapeserta.*') || request()->routeIs('pasien.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-database" style="font-size:16px"></i> <span class="nav-label">Data</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{  request()->routeIs('datapeserta.*') ? 'active' : '' }}"><a href="/datapeserta">Data Peserta</a></li>
                    <li class="{{  request()->routeIs('pasien.*') ? 'active' : '' }}"><a href="{{ route('pasien.index') }}">Data Pasien</a></li>
                </ul>
            </li>
            <li class="{{  request()->routeIs('profile.*') ? 'active' : '' }}">
                <a href="{{ route('profile.index') }}"><i class="fa fa-user" style="font-size:16px" aria-hidden="true"></i> <span class="nav-label">Profil</span></a>
            </li>
        </ul>
    </div>
</nav>