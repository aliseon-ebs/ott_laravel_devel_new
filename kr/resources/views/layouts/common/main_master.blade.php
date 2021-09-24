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
    <link rel="shortcut icon" href="{{ URL::asset('images/common/aliseon_favicon.png')}}">
    @include('includes.main_include')
</head>

@section('body')
{{-- @show --}}
<body>
    @include('layouts.common.main_topbar')

        <div class="body_wr">
            @yield('contents')
        </div>
    <!-- End Page-content -->
    @include('layouts.common.main_footer')
      
</body>

</html>