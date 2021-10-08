<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="#"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Administrator</span>
                                <span class="text-muted text-xs block">Super Admin <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Contacts</a></li>
                                <li><a class="dropdown-item" href="#">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            RTI
                        </div>
                    </li>
                    <li class="{{  request()->routeIs('manage.beranda') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-home" style="font-size:16px" aria-hidden="true"></i> <span class="nav-label">Beranda</span></a>
                    </li>
                    <!-- @can('master.index') -->
                    <li class="{{  request()->routeIs('jabatan.*') || request()->routeIs('bidang.*') || request()->routeIs('pegawai.*') || request()->routeIs('kk.*') || request()->routeIs('pasien.*') || request()->routeIs('poli.*') || request()->routeIs('jenisoperasi.*') || request()->routeIs('penyakit.*') || request()->routeIs('tindakan.*') || request()->routeIs('diagnosa_penyakit.*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-database" style="font-size:16px"></i> <span class="nav-label">Master</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!-- @can('jabatan.index') -->
                            <li class="{{  request()->routeIs('jabatan.*') ? 'active' : '' }}"><a href="#">Data Jabatan</a></li>
                            <!-- @endcan -->
                        </ul>
                    </li>
                    <!-- @endcan -->
                    
                    
                </ul>
            </div>
</nav>