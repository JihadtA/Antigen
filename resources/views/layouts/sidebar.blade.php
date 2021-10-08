<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('img/pp.jpg') }}" style="width: 80px; height: 80px;"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Administrator</span>
                        <span class="text-muted text-xs block">Super Admin <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Contacts</a></li>
                        <li><a class="dropdown-item" href="#">Mailbox</a></li>
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
            <li class="{{  request()->routeIs('manage.beranda') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-home" style="font-size:16px" aria-hidden="true"></i> <span class="nav-label">Beranda</span></a>
            </li>
            <li class="{{  request()->routeIs('jabatan.*') || request()->routeIs('bidang.*') || request()->routeIs('pegawai.*') || request()->routeIs('kk.*') || request()->routeIs('pasien.*') || request()->routeIs('poli.*') || request()->routeIs('jenisoperasi.*') || request()->routeIs('penyakit.*') || request()->routeIs('tindakan.*') || request()->routeIs('diagnosa_penyakit.*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-database" style="font-size:16px"></i> <span class="nav-label">Master</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{  request()->routeIs('jabatan.*') ? 'active' : '' }}"><a href="#">Data Jabatan</a></li>
                    <li class="{{  request()->routeIs('bidang.*') ? 'active' : '' }}"><a href="#">Data Bidang</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>