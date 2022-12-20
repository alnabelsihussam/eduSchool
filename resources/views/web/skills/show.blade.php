@extends('web.layouts.master')


@section('content')
    <header class="header_inner courses_page">
        <!-- Preloader -->
        {{-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> --}}

        <div class="intro_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="intro_text">
                            <h1>{{ $skill->name }}</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="" class="active">{{ $skill->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <section class="blog_wrapper" id="courses_details_wrapper">
        <!--Start Courses Area Section-->
        <div class="popular_courses" id="popular_courses_page">
            <div class="container">
                <div class="row">

                    @foreach ($skill->exams as $exam)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="single-courses">
                                <div class="courses_banner_wrapper">
                                    <div class="courses_banner">


                                        <a href="#"><img
                                                src="{{ asset('web/assets/images/banner/testimonial_2_shpe_2.png') }}"
                                                alt="" class="img-fluid" style="height: 212px" /></a>
                                    </div>
                                    <div class="purchase_price">
                                        <a href="#" class="read_more-btn">$
                                            222222</a>
                                    </div>
                                </div>
                                <div class="courses_info_wrapper">
                                    <div class="courses_title">
                                        <h3>
                                            <a href="{{ route('exams.show', $exam->id) }}"> {{ $exam->name }} </a>
                                        </h3>
                                        <div class="teachers_name">
                                            Teacher - <a href="#" title="">Jhonthan Smith</a>
                                        </div>
                                    </div>
                                    <div class="courses_info">
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fas fa-user"></i> {{ $exam->users()->count() }}
                                                Students
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>
                                                    {{ Carbon\Carbon::parse($exam->created_at)->format('d M, Y') }}
                                                </span>

                                            </li>
                                        </ul>
                                        <a href="#" class="cart_btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- ./ End  Blog Wrapper-->
@endsection
