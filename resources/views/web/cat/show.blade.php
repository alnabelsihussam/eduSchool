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

    <section class="blog_wrapper" id="courses_details_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">


                    <!--Start Courses Area Section-->
                    <section class="popular_courses" id="popular_courses_page">
                        <div class="container">
                            <div class="row">

                                @foreach ($skills as $skill)
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
                                                        <a href="#"> {{ $skill->name }} </a>
                                                    </h3>
                                                    <div class="teachers_name">
                                                        Teacher - <a href="#" title="">Jhonthan Smith</a>
                                                    </div>
                                                </div>
                                                <div class="courses_info">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <i class="fas fa-user"></i> {{ $skill->getStduentsCount() }}
                                                            Students
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>
                                                                {{ Carbon\Carbon::parse($skill->created_at)->format('d M, Y') }}
                                                            </span>

                                                        </li>
                                                    </ul>
                                                    <a href="#" class="cart_btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach


                                <!-- Ends: .single courses -->
                            </div>
                            <!-- Ends: . -->


                            {{-- <div class="pagination_blog">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="current"><a href="#">2</a></li>
                                    <li>
                                        <a href="#" class=""><i class="flaticon-right-arrow"></i></a>
                                    </li>
                                </ul>
                            </div> --}}

                            {{ $skills->links() }}


                        </div>
                </div>
    </section>
    <!-- ./ End Courses Area section *************************-->


    </div>
    <!--End Blog Siderbar Left-->


    <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
        <div class="blog-right-items">
            <div class="courses_features widget_single">
                <div class="items-title">
                    <h3 class="title">Courses Features</h3>
                </div>
                <div class="features_items">
                    <ul class="list-unstyled">
                        @foreach ($cats as $cat)
                            <li><a href="{{ route('cat.show', $cat->id) }}" title=""><i class="flaticon-page"></i>
                                    {{ $cat->name }}
                                </a><span>{{ $cat->skills()->count() }}</span></li>
                        @endforeach


                    </ul>
                </div>

                <img src="{{ asset('web/assets/images/banner/testimonial_2_shpe_2.png') }}" alt=""
                    class="courses_feaures_shpe">
            </div>


        </div>
    </div> <!-- End Right Sidebar-->

    </div>
    </div>
    </section><!-- ./ End  Blog Wrapper-->
@endsection
