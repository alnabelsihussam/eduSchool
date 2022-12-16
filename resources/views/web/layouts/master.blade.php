<!doctype html>
<html lang="en">

@include('web.layouts.head')

<body>


    <!--  start header section-->
    <!-- كل شيئ بتكرر معي نضعه هتا.   -->
    <!--  start Navbar section-->




    @include('web.layouts.Navbar')

    @yield('content')






    <!-- Footer -->

    @include('web.layouts.footer')

    <!-- End Footer -->


    <!-- JavaScript -->
    @include('web.layouts.scripts')



</body>

</html>
