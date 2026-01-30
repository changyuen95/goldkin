<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Goldken Sdn Bhd')</title>

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

    <!-- Floating Request A Quote button (fixed bottom-right); shown on Services page only -->
    @if (Request::is('services*'))
        <a href="{{ url('/contact') }}" class="floating-quote btn-1 request-a-quote" aria-label="Request A Quote">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <span class="floating-text">Request A Quote</span>
        </a>
    @endif

<!-- AOS CDN and Initialization -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 80, // default is 120. Lower = animate earlier
    duration: 700, // animation duration
    once: true     // only animate once
  });
</script>

    
    @include('layouts.scripts')
</body>
</html>
