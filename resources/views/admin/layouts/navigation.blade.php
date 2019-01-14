<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::guard('admin')->user()->name }}</strong>
                            </span>
                            <span class="text-muted">{{ Auth::guard('admin')->user()->username }}</span>
                            <span class="text-muted text-xs block">{{ __('Options') }}<b class="caret"></b></span>
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
            <li class="{{ isActiveRoute('dashboard') }}">
                <a href="{{ route('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span> </a>
            </li>
            <li class="{{ isActiveRoute('bureaus') }}">
                <a href="{{ url('/bureaus') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Bureaus</span> </a>
            </li>
            <li class="{{ isActiveRoute('teamleader') }}">
                <a href="{{ url('/teamleader') }}"><i class="fa fa-th-large"></i> <span class="nav-label">{{ __('Team Leader') }}</span> </a>
            </li>
            <li class="{{ isActiveRoute('#') }}">
                <a href="{{ url('#') }}"><i class="fa fa-th-large"></i> <span class="nav-label">{{ __('Employee') }}</span> </a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ isActiveRoute('employee') }}">
                        <a href="{{ url('/employee') }}"><span class="nav-label">{{ __('Overview') }}</span></a>
                    </li>
                </ul>
                <ul class="nav nav-second-level collapse">
                        <li class="{{ isActiveRoute('employee/create') }}">
                            <a href="{{ url('/employee/create') }}"><span class="nav-label">{{ __('Add User') }}</span></a>
                        </li>
                    </ul>
            </li>
        </ul>

    </div>
</nav>
