@auth


     <div id="layoutSidenav_nav">

        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                        <a class="nav-link" href="{{ route('admin.route') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href=" {{ route('users.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Users
                    </a>
                    <a class="nav-link" href="{{ route('users.create') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Register
                    </a>




                    <li class="nav-item menu-open">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"
                            class="nav-link {{Route::is('logout') ? 'active' : ''}}">
                            <p>Logout</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>



                    </li>


                    {{--  <a class="nav-link" href="{{ route('banner.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Banner
                    </a>
                    <a class="nav-link" href="{{ route('welcome.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        welcome page
                    </a>
                    <a class="nav-link" href="{{ route('welcomehaedings.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        welcome heading
                    </a>
                    <a class="nav-link" href="{{ route('welcomecontent.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        welcome content
                    </a>
                    <a class="nav-link" href="{{ route('doctor.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Doctors
                    </a>
                    <a class="nav-link" href="{{ route('service.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Our services
                    </a>
                    <a class="nav-link" href="{{ route('social.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                        Social links
                    </a>  --}}



                </div>

            </div>

        </nav>
    </div>


@endauth
