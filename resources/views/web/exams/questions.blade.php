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
                            <h1>{{ $exam->name }}</h1>
                            <div class="pages_links">
                                <a href="#" title="">Home</a>
                                <a href="#" title="" class="active">{{ $exam->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <section class="blog_wrapper" id="courses_details_wrapper">

        <!-- Blog -->
        <div id="blog" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- main blog -->
                    <div id="main" class="col-md-9">

                        <!-- blog post -->
                        <div class="blog-post mb-5">
                            <p>
                                {{ $exam->desc }}
                            </p>
                        </div>
                        <!-- /blog post -->

                        <div>
                            <a href="{{ route('exams.questions', $exam->id) }}" type="button" class="btn btn-success">Start
                                Exam</a>

                        </div>
                    </div>
                    <!-- /main blog -->

                    <!-- aside blog -->
                    <div id="aside" class="col-md-3">

                        <!-- exam details widget -->
                        <ul class="list-group">
                            <li class="list-group-item">Skill: {{ $exam->skill->cat->name }}</li>
                            <li class="list-group-item">Questions: {{ $exam->question_no }}</li>
                            <li class="list-group-item">Duration: {{ $exam->duration_mints }}</li>
                            <li class="list-group-item">Difficulty:
                                @for ($i = 1; $i < $exam->difficulty; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                                @for ($i = 1; $i <= 5 - $exam->difficulty; $i++)
                                    <i class="fa fa-star-o"></i>
                                @endfor

                            </li>
                        </ul>
                        <!-- /exam details widget -->



                    </div>
                    <!-- /aside blog -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </div>
        <!-- /Blog -->

    </section><!-- ./ End  Blog Wrapper-->
@endsection
