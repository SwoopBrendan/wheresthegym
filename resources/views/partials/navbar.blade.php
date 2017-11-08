<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Here Are The Gyms</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li>
                    <a href="{{ url('#') }}" class="simple-text" onclick="showSettings()">
                        <i class="ti-panel"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <a href="{{ url('profile') }}">
                        <i class="ti-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="ti-arrow-right"></i>
                        <p>Logout</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>