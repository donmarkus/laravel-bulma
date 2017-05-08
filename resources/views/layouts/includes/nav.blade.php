<div class="container">
    <div class="nav-left">
        <a class="nav-item" href="/">
            {{ config('app_name', 'Laravel') }}
        </a>
        <a class="nav-item is-tab is-hidden-mobile is-active" href="/">Home</a>
        {{--<a class="nav-item is-tab is-hidden-mobile">About</a>--}}
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
        {{--<a class="nav-item is-tab is-hidden-tablet is-active">Home</a>--}}
        {{--<a class="nav-item is-tab is-hidden-tablet">Features</a>--}}
        {{--<a class="nav-item is-tab is-hidden-tablet">Pricing</a>--}}
        {{--<a class="nav-item is-tab is-hidden-tablet">About</a>--}}
        {{--<a class="nav-item is-tab">--}}
        {{--<figure class="image is-16x16" style="margin-right: 8px;">--}}
        {{--<img src="http://bulma.io/images/jgthms.png">--}}
        {{--</figure>--}}
        {{--Profile--}}
        {{--</a>--}}
        @if(Auth::guest())
            <a class="nav-item is-tab" href="{{ route('login') }}">
                Login
            </a>
            <a class="nav-item is-tab" href="{{ route('register') }}">
                Register
            </a>
        @endif

        @if(Auth::check())
            <a class="nav-item is-tab" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endif

    </div>
</div>