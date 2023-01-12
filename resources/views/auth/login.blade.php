@extends('web.layouts.master')


@section('content')
    <header class="header_inner courses_page">


        <div class="intro_wrapper">
            <div class="container">



                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="intro_text">
                            <h1> Login </h1>
                            <div class="pages_links">
                                <a href="#" title="">Home </a>
                                <a href="#" title="" class="active">Login </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </header>
    <!-- End Header -->





    <div class="container register-box">
        <div class="col-md-9 col-md-offset-3">
            <div class=" card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Login </p>

                    <form action="{{ url('login') }} " method="post">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="remember" />
                                    <label>
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">submit</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
