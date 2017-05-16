
<html>
<head>
<title>hello @yield('title')</title>
<link rel="stylesheet" href="{{asset('public/template/css/style.css')}}"/>
</head>

<body>
<div id="wrapper">
{{--@include('views.marquee')--}}
@include('views.marquee',['mar_content'=>"xin chao world"])
<div id="header">
    @section('sidebar')
    day la sidebar
    @show
</div>
<div id="content">
    @yield('content')
</div>
<div id="footer"></div>
</div>
</body>
</html>