<ul class="nav navbar-nav">
    <li><a href="/">Blog Home</a></li>
    @if(Auth::check())
        <li @if(Request::is('admin/post*')) style="background-color: #5bc0de;color: #faebcc" @endif>
            <a href="/admin/post" style="color: #0d3625">Posts</a>
        </li>
        <li @if(Request::is('admin/tag*')) style="background-color: #5bc0de;color: #faebcc" @endif>
            <a href="/admin/tag" style="color: #faebcc">Tags</a>
        </li>
        <li @if (Request::is('admin/upload*')) style="background-color: #5bc0de" @endif>
            <a href="/admin/upload" style="color: #faebcc">Uploads</a>
        </li>
    @endif
</ul>


<!-- Right Side Of Navbar -->
<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>