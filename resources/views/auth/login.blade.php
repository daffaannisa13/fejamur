@extends('layouts.app')

@section('title', 'Login Page')

@section('content')

<section class="login-alda-section">
    <div class="login-alda-container">

        <div class="login-alda-card">

            <!-- BAGIAN KIRI (LOGO) -->
            <div class="login-alda-left">
                <img src="{{ asset('assets/img/alda/mascot.png') }}" alt="Logo ALDA" class="login-logo">
            </div>

            <!-- BAGIAN KANAN (FORM) -->
            <div class="login-alda-right">

                <h2 class="login-title">Login</h2>
                <p class="login-subtitle">Login to your account continue</p>

                <form action="#" class="account__form">

                    <div class="form-grp">
                        <label for="email">Email</label>
                        <input id="email" type="text" placeholder="Masukkan Email...">
                    </div>

                    <div class="form-grp">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Masukkan Password...">
                    </div>

                    <div class="account__check">
                        <div class="account__check-remember">
                            <input type="checkbox" id="terms-check">
                            <label for="terms-check">Ingat saya</label>
                        </div>

                        <div class="account__check-forgot">
                            <a href="{{ url('/reset-password') }}">Lupa Password?</a>
                        </div>
                    </div>

                    <button type="submit" class="login-btn">Masuk</button>

                </form>

            </div>
        </div>

    </div>
</section>

@endsection
