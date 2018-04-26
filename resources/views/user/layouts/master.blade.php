<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.app.title')</title>

    {{--Import CSS--}}
    {{ Html::style(mix('css/app.css')) }}
    @yield('style')
</head>
<body>
    @include('user.layouts.header')

    @yield('content')

    @include('user.layouts.footer')

    {{--Import JS--}}
    {{ Html::script(mix('js/app.js')) }}
    @yield('script')
</body>
</html>
