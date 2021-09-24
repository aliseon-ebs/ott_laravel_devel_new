<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Aliseon에 오신걸 환영합니다." name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" /> 
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/main/logo.png')}}">
    @include('includes.seller_myshop_header_include')
</head>

@section('body')
{{-- @show --}}
<body>


    @include('layouts.common.seller_myshop_topbar')
    <div style="display: flex">
    @include('layouts.common.seller_myshop_sidebar')
    <div class="dashboard_main">
        <div class="dashboard_main-container">
            @yield('contents')
        </div>
    </div>
    </div>
    @include('layouts.common.seller_myshop_footer')
    <!-- End Page-content -->
    @include('includes.seller_footer_include')
</body>

</html>