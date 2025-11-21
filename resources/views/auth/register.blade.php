@extends('layouts.app')

@section('title', 'Register')

@section('content')

<section class="singUp-area section-py-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">

                <div class="singUp-wrap">
                    <h2 class="title">Create Your Account</h2>

                    <form action="#" method="POST" class="account__form">
                        @csrf

                        <div class="row gutter-20">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>First Name</label>
                                    <input type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name">
                                </div>
                            </div>
                        </div>

                        <div class="form-grp">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>

                        <div class="form-grp">
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>

                        <div class="form-grp">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation">
                        </div>

                        <button class="btn btn-two btn-sm">Sign Up</button>
                    </form>

                    <div class="account__switch">
                        <p>Already have an account? <a href="{{ url('login') }}">Login</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
