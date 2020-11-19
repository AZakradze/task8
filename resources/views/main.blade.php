@include('incs.header')
    <body class="antialiased">
    @include('incs.nav')
        <div class="content">
            @yield('content')
        </div>
    </body>
@include('incs.footer')
