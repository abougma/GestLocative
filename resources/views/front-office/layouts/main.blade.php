@include('front-office.layouts.header')

<main class="content-wrapper">
    @if(Request::is('/'))
        @include('front-office.layouts.nav')
    @else
        @include('front-office.layouts.nav')
    @endif
    @yield('body')
</main>

<!-- End #main -->

@include('front-office.layouts.footer')
