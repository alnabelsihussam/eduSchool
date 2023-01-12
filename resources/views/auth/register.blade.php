@extends('web.layouts.master')


@section('content')
    <header class="header_inner courses_page">


        <div class="intro_wrapper">
            <div class="container">



                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="intro_text">
                            <h1> Register </h1>
                            <div class="pages_links">
                                <a href="#" title="">Home </a>
                                <a href="#" title="" class="active">Register </a>
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

                @include('inc.message')

                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register </p>

                    <form action="{{ url('register') }} " method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
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
                        <div class="input-group mb-3">
                            <input type="password" name="comfirm_password" class="form-control"
                                placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div> --}}

                            <div class="col-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                            </div>

                        </div>
                    </form>
                    {{-- <div class="social-auth-links text-center">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i>
                            Sign up using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i>
                            Sign up using Google+
                        </a>
                    </div>
                    <a href="login.html" class="text-center">I already have a membership</a> --}}
                </div>

            </div>
        </div>
    </div>
@endsection
