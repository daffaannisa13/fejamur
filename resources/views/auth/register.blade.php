@extends('layouts.app')

@section('title', 'Register Page')

@section('content')

<section class="register-alda-section">
    <div class="register-alda-container">

        <div class="register-alda-card">

            <!-- BAGIAN KIRI (LOGO) -->
            <div class="register-alda-left">
                <img src="{{ asset('assets/img/alda/logo.png') }}" alt="Logo ALDA" class="register-logo">
            </div>

            <!-- BAGIAN KANAN (FORM) -->
            <div class="register-alda-right">

                <h2 class="register-title">Registrasi</h2>
                <p class="register-subtitle">Login to your account continue</p>

                <form action="#" class="register__form">

                    <div class="register-form-grp">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" placeholder="Masukkan Nama...">
                    </div>

                    <div class="register-form-grp">
                        <label for="phone">No. Handphone</label>
                        <input id="phone" type="text" placeholder="Masukkan No. Handphone...">
                    </div>

                    <div class="register-form-grp">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" type="text" placeholder="Masukkan Alamat...">
                    </div>

                    <div class="register-form-grp">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Masukkan Email...">
                    </div>

                    <div class="register-form-grp">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Masukkan Password...">
                    </div>

                    <button type="submit" class="register-btn">Masuk</button>

                </form>

            </div>
        </div>

    </div>
</section>

@endsection