@include('partials._head')
<body>

@include('partials._nav')

<div class="container">

    @include('partials._message')

    @yield("content")
    <hr>
    @include('partials._footer')
</div> <!-- End of container -->
</body>
</html>