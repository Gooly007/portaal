<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">Meer opties <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a ui-sref="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Rooster</span></a>
            </li>
            <li class="{{ isActiveRoute('mutaties') }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Mutaties</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('#') }}">
                        <a href="#"><span class="nav-label">Vakantie</span></a>
                    </li>
                </ul>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('#') }}">
                        <a href="#"><span class="nav-label">Ziekte</span></a>
                    </li>
                </ul>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('#') }}">
                        <a href="#"><span class="nav-label">Verzuim</span></a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
