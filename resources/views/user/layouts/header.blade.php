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
            <a class="navbar-brand" href="#">@lang('lang.nav.brand')</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">@lang('lang.nav.home')
                        <span class="sr-only">(@lang('lang.nav.current')</span>
                    </a>
                </li>
                <li><a href="{{ route('user.courses') }}">@lang('lang.nav.course')</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">@lang('lang.nav.user') <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">@lang('lang.nav.profile')</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">@lang('lang.nav.logout')</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
