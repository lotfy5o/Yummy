<!DOCTYPE html>
<html lang="zxx">

@include('partials.head')

<body>
    <!-- Page Preloder -->
    @include('partials.preloder')

    <!-- Header Section Begin -->
    @include('partials.header')
    <!-- Header End -->

    <!-- Hero Search Section Begin -->
    @include('partials.hero')
    <!-- Hero Search Section End -->

    <!-- Variable Section Begin -->
    @yield('content')
    <!-- Variable Section End -->





    <!-- Footer Section Begin -->
    @include('partials.footer')
    <!-- Footer Section End -->

    <!-- Search model -->
    @include('partials.search-model')
    <!-- Search model end -->

    <!-- Js Plugins -->
    @include('partials.scripts')
</body>

</html>