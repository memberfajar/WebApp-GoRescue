<!doctype html>
<html>
<head>
    @include('layouts.includes.head')
    <title>@yield('title')</title>
</head>
<body>
@include('layouts.includes.header')
@include('layouts.includes.sidebar')
@yield('content')

</body>
</html>