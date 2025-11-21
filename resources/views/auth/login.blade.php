@extends('layouts.app')

@section('title', 'Login Page')

@section('content')

    <!-- login -->
    <section class="singUp-area section-py-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="singUp-wrap">

                        <h2 class="title">Welcome back!</h2>
                        <p>Hey there! Ready to log in?</p>

                        <form action="#" class="account__form">
                            <div class="form-grp">
                                <label for="email">Email</label>
                                <input id="email" type="text" placeholder="email">
                            </div>

                            <div class="form-grp">
                                <label for="password">Password</label>
                                <input id="password" type="password" placeholder="password">
                            </div>

                            <div class="account__check">
                                <div class="account__check-remember">
                                    <input type="checkbox" id="terms-check">
                                    <label for="terms-check">Remember me</label>
                                </div>

                                <div class="account__check-forgot">
                                    <a href="{{ url('/reset-password') }}">Forgot Password?</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-two btn-sm" style="border-radius: 5px;">Sign In</button>
                        </form>

                        <div class="account__switch">
                            <p>Don't have an account? <a href="{{ url('/register') }}">Sign Up</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
