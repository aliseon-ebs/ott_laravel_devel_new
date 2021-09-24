<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | ALISEON - Seller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose seller & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/common/aliseon_favicon.png')}}">
    @include('includes.seller_header_include')
</head>

@section('body')
@show
<body data-layout="detached" data-topbar="colored">
    <!-- Loader -->

    <!-- Begin page -->
            @include('layouts.common.seller_topbar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                    @yield('contents')

    @include('layouts.common.seller_myshop_footer')
    @include('includes.seller_footer_include')
</body>

</html>