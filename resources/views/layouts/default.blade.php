<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- TITLE PLACEHOLDER --}}
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset("assets/favicon.ico")}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("css/styles.css")}}" rel="stylesheet" />
</head>
<body>
    @include("partials.navbar")
    {{-- HEADER PLACEHOLDER --}}
    @yield('page_header')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                {{-- MAIN CONTENT PLACEHOLDER --}}
                @yield('main_content')
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
    @include('partials.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src={{asset("js/scripts.js")}}></script>
</body>
</html>
