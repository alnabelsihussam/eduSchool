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
                            <h1>{{ $cat->name }}</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="" class="active">{{ $cat->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    <!-- End Login Signup Option -->

    <!--Start Courses Area Section-->
    <section class="popular_courses" id="popular_courses_page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner">
                                <a href="#"><img src="admin/production/images/33333" alt="" class="img-fluid"
                                        style="height: 212px" /></a>
                            </div>
                            <div class="purchase_price">
                                <a href="#" class="read_more-btn">$
                                    222222</a>
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3>
                                    <a href="#"> 4444 </a>
                                </h3>
                                <div class="teachers_name">
                                    Teacher - <a href="#" title="">Jhonthan Smith</a>
                                </div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-user"></i>55555
                                        Days
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>1111

                                        Students
                                    </li>
                                </ul>
                                <a href="#" class="cart_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Ends: .single courses -->
                </div>
                <!-- Ends: . -->
                00000

                <div class="pagination_blog">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="current"><a href="#">2</a></li>
                        <li>
                            <a href="#" class=""><i class="flaticon-right-arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Courses Area section -->
@endsection
