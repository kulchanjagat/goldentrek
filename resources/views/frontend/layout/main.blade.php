<!doctype html>
<html lang="en">
@include('frontend.includes.header')
<body>



@include('frontend.includes.nav')

<!-- Main Content - start -->
<main>


@yield('content')


</main>
<!-- Main Content - end -->


@include('frontend.includes.footer')


@include('frontend.includes.scripts')

</body>
</html>