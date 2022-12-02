@extends('web.layouts.master')


@section('content')
    @include('web.layouts.header')
    <!--  End header section-->

    <!--  Unlimited Possibilities -->

    @include('web.layouts.Unlimited')

    <!-- End Unlimited Possibilities -->



    <!--  Larnign Step -->
    @include('web.layouts.LarnignStep')
    <!-- End LarnignStep -->




    <!-- ./  Courses Area section -->

    @include('web.layouts.CoursesArea')

    <!-- ./ End Courses Area section -->




    <!-- ./  Register Area section -->

    @include('web.layouts.RegisterArea')

    <!-- ./ End Register Area section -->


    <!-- ./  Our Instructiors -->
    @include('web.layouts.OurInstructiors')

    <!-- ./ End Our Instructiors -->


    <!--  Testimonial -->
    @include('web.layouts.Testimonial')

    <!-- End Testimonial -->




    <!-- End Blog -->
    @include('web.layouts.Blog')


    <!-- End Blog -->



    <!-- End Team Group -->

    @include('web.layouts.teamgroup')

    <!-- End Team Group -->
@endsection
