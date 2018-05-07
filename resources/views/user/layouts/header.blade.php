<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">@lang('lang.nav.icon_toggle')</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">@lang('lang.nav.brand')</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('home') }}">@lang('lang.nav.home')
                        <span class="sr-only">(@lang('lang.nav.current')</span>
                    </a>
                </li>
                @auth
                    <li><a href="{{ route('user.courses') }}">@lang('lang.nav.course')</a></li>
                    <li><a href="{{ route('user.words') }}">@lang('lang.nav.words')</a></li>
                @endauth
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">@lang('lang.nav.login')</a></li>
                    <li><a href="{{ route('register') }}">@lang('lang.nav.register')</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#">@lang('lang.nav.profile')</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"
                                >
                                    @lang('lang.nav.logout')
                                </a>

                                {{ Form::open(['route' => 'logout', 'method' => 'POST', 'id' => 'logout-form', 'style' => 'display: none']) }}
                                {{ Form::close() }}
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
