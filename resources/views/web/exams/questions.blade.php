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




        <style>
            body {

                background-color: #f7f1f1;
            }

            label.btn {
                padding: 18px 60px;
                white-space: normal;
                -webkit-transform: scale(1.0);
                -moz-transform: scale(1.0);
                -o-transform: scale(1.0);
                -webkit-transition-duration: .3s;
                -moz-transition-duration: .3s;
                -o-transition-duration: .3s
            }

            label.btn:hover {
                text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                -o-transform: scale(1.1);
            }

            label.btn-block {
                text-align: left;
                position: relative
            }

            label .btn-label {
                position: absolute;
                left: 0;
                top: 0;
                display: inline-block;
                padding: 0 10px;
                background: #49548b;
                height: 100%
            }

            label .glyphicon {
                top: 34%
            }

            .element-animation1 {
                animation: animationFrames ease .8s;
                animation-iteration-count: 1;
                transform-origin: 50% 50%;
                -webkit-animation: animationFrames ease .8s;
                -webkit-animation-iteration-count: 1;
                -webkit-transform-origin: 50% 50%;
                -ms-animation: animationFrames ease .8s;
                -ms-animation-iteration-count: 1;
                -ms-transform-origin: 50% 50%
            }

            .element-animation2 {
                animation: animationFrames ease 1s;
                animation-iteration-count: 1;
                transform-origin: 50% 50%;
                -webkit-animation: animationFrames ease 1s;
                -webkit-animation-iteration-count: 1;
                -webkit-transform-origin: 50% 50%;
                -ms-animation: animationFrames ease 1s;
                -ms-animation-iteration-count: 1;
                -ms-transform-origin: 50% 50%
            }

            .element-animation3 {
                animation: animationFrames ease 1.2s;
                animation-iteration-count: 1;
                transform-origin: 50% 50%;
                -webkit-animation: animationFrames ease 1.2s;
                -webkit-animation-iteration-count: 1;
                -webkit-transform-origin: 50% 50%;
                -ms-animation: animationFrames ease 1.2s;
                -ms-animation-iteration-count: 1;
                -ms-transform-origin: 50% 50%
            }

            .element-animation4 {
                animation: animationFrames ease 1.4s;
                animation-iteration-count: 1;
                transform-origin: 50% 50%;
                -webkit-animation: animationFrames ease 1.4s;
                -webkit-animation-iteration-count: 1;
                -webkit-transform-origin: 50% 50%;
                -ms-animation: animationFrames ease 1.4s;
                -ms-animation-iteration-count: 1;
                -ms-transform-origin: 50% 50%
            }

            @keyframes animationFrames {
                0% {
                    opacity: 0;
                    transform: translate(-1500px, 0px)
                }

                60% {
                    opacity: 1;
                    transform: translate(30px, 0px)
                }

                80% {
                    transform: translate(-10px, 0px)
                }

                100% {
                    opacity: 1;
                    transform: translate(0px, 0px)
                }
            }

            @-webkit-keyframes animationFrames {
                0% {
                    opacity: 0;
                    -webkit-transform: translate(-1500px, 0px)
                }

                60% {
                    opacity: 1;
                    -webkit-transform: translate(30px, 0px)
                }

                80% {
                    -webkit-transform: translate(-10px, 0px)
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(0px, 0px)
                }
            }

            .modal-header {
                background-color: transparent;
                color: inherit
            }

            .modal-body {
                min-height: 300px
            }
        </style>


        <div class="container ">
            <div class="row ">





                <div class="container-fluid ">
                    @foreach ($exam->Questions as $index => $question)
                        <div class="modal-dialog ">
                            <div class="modal-content ">
                                <div class="modal-header">

                                    <h3>Q.{{ $index + 1 }} - {{ $question->title }} ?</h3>
                                </div>
                                <div class="modal-body ">
                                    <div class="col-xs-3 5"></div>
                                    <div class="quiz" id="quiz" data-toggle="buttons">
                                        <label class="element-animation1 btn btn-lg btn-danger btn-block"><span
                                                class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>

                                            <input type="radio" name="q_answer"
                                                value="1">{{ $question->option_1 }}.</label>

                                        <label class="element-animation2 btn btn-lg btn-danger btn-block"><span
                                                class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                            <input type="radio" name="q_answer"
                                                value="2">{{ $question->option_2 }}.</label>

                                        <label class="element-animation3 btn btn-lg btn-danger btn-block"><span
                                                class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                            <input type="radio" name="q_answer"
                                                value="3">{{ $question->option_3 }}.</label>

                                        <label class="element-animation4 btn btn-lg btn-danger btn-block"><span
                                                class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                            <input type="radio" name="q_answer"
                                                value="4">{{ $question->option_4 }}.</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button
                            class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i
                                class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button
                            class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i
                                class="fa fa-angle-right ml-2"></i></button>
                    </div>






                </div>











            </div>

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

    </section><!-- ./ End  Blog Wrapper-->
@endsection
