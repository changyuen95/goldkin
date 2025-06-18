<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Petrox - Industry and Manufacturing')</title>

    @include('layouts.styles')
</head>
<body>

    <!-- :: Loading -->
    <div class="loading">
        <div class="loading-box">
            <div class="ar uno"></div>
            <div class="ar dos"></div>
            <div class="ar tres"></div>
            <div class="ar cuatro"></div>
        </div>
    </div>

    {{-- ✅ Only 1 header location --}}
    @include('layouts.header')

    <div class="main-content">
        @yield('content')
    </div>

    @include('layouts.footer')

    @include('layouts.scripts')
</body>
</html>
