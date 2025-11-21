@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- Mobile Menu -->
<div class="mobile-menu">
    <nav class="menu-box">
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <div class="nav-logo">
        <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/alda/logo.png') }}" alt="">
            </a>
        </div>
        <div class="menu-outer">
            <!-- Menu will be injected by JS -->
        </div>

        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
</div>
<section class="hero-alda" style="background-image: url('{{ asset('assets/img/alda/bg.png') }}');">
    <div class="container hero-content">
        <div class="row align-items-center justify-content-between">
            {{-- Text Content --}}
            <div class="col-lg-6 text-lg-start text-center">
                <h1 class="hero-title">
                    Keripik Jamur
                    <span>ALDA</span>
                </h1>
                <a href="#produk" class="btn-alda">Beli Sekarang</a>
            </div>

            {{-- Product Image --}}
            <div class="col-lg-6 text-lg-end text-center">
                <img src="{{ asset('assets/img/alda/product.png') }}" 
                     class="hero-product" 
                     alt="Keripik Jamur ALDA">
            </div>
        </div>
    </div>
    
</section>

<section class="tentang-kami-section" id="tentang">
    <div class="container">
        <div class="tentang-kami-card">
            {{-- Content --}}
            <div class="tentang-kami-content">
                <h2>Tentang Kami</h2>
                <p>
                    Sejak 2011, Kripik Alda hadir dengan camilan sehat yang nggak cuma enak, tapi juga bergizi! Kami menghadirkan Kripik Jamur dan Kripik Pare yang terbuat dari bahan alami pilihan, diproses dengan cara yang higienis untuk menjaga kualitas dan rasa. Tanpa bahan pengawet, kripik kami punya tekstur renyah yang cocok banget buat teman nongkrong atau ngemil sambil santai. Berlokasi di Rt/Rw 01/05, Ds. Jagul Dsn. Sraten, Kec. Ngancar, Kabupaten Kediri, Jawa Timur, kami siap memberikan camilan yang nggak hanya lezat, tapi juga mendukung gaya hidup sehat. Kripik Alda – camilan yang bikin ketagihan!
                </p>
            </div>

            {{-- Mascot Image --}}
            <div class="tentang-kami-image">
                <img src="{{ asset('assets/img/alda/mascot.png') }}" alt="Mascot Kripik Jamur Tiram ALDA">
            </div>
        </div>
    </div>
</section>

<section class="produk-section" id="produk">
    {{-- Section Title --}}
    <div class="section-title">
        <h2>Produk</h2>
    </div>

    {{-- Carousel --}}
    <div class="produk-carousel-wrapper">
        {{-- Navigation Prev --}}
        <button class="produk-nav-btn produk-nav-prev">
            <i class="fas fa-chevron-left"></i>
        </button>

        {{-- Swiper --}}
        <div class="swiper produk-swiper">
            <div class="swiper-wrapper">
                {{-- Slide 1 --}}
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="{{ asset('assets/img/alda/produk-ayam-panggang.png') }}" alt="Keripik Jamur Rasa Ayam Panggang">
                        <p class="produk-name">Keripik Jamur Rasa Ayam Panggang</p>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="{{ asset('assets/img/alda/produk-balado.png') }}" alt="Keripik Jamur Rasa Balado">
                        <p class="produk-name">Keripik Jamur Rasa Balado</p>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="{{ asset('assets/img/alda/produk-original.png') }}" alt="Keripik Jamur Rasa Original">
                        <p class="produk-name">Keripik Jamur Rasa Original</p>
                    </div>
                </div>

                {{-- Slide 4 --}}
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="{{ asset('assets/img/alda/produk-pedas.png') }}" alt="Keripik Jamur Rasa Pedas">
                        <p class="produk-name">Keripik Jamur Rasa Pedas</p>
                    </div>
                </div>

                {{-- Slide 5 --}}
                <div class="swiper-slide">
                    <div class="produk-card">
                        <img src="{{ asset('assets/img/alda/produk-bbq.png') }}" alt="Keripik Jamur Rasa BBQ">
                        <p class="produk-name">Keripik Jamur Rasa BBQ</p>
                    </div>
                </div>
            </div>

            {{-- Pagination --}}
            <div class="produk-pagination"></div>
        </div>

        {{-- Navigation Next --}}
        <button class="produk-nav-btn produk-nav-next">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    {{-- Button Beli --}}
    <div class="btn-beli-wrapper">
        <a href="#" class="btn-beli-produk">Beli Sekarang</a>
    </div>
</section>

{{-- Swiper JS - Letakkan setelah swiper-bundle.min.js --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    var produkSwiper = new Swiper('.produk-swiper', {
        slidesPerView: 5,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        grabCursor: true,
        
        // Autoplay
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        // Pagination
        pagination: {
            el: '.produk-pagination',
            clickable: true,
        },

        // Navigation
        navigation: {
            nextEl: '.produk-nav-next',
            prevEl: '.produk-nav-prev',
        },

        // Responsive breakpoints
        breakpoints: {
            0: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
    });

    // Pause on hover
    var swiperEl = document.querySelector('.produk-swiper');
    if (swiperEl) {
        swiperEl.addEventListener('mouseenter', function() {
            produkSwiper.autoplay.stop();
        });
        swiperEl.addEventListener('mouseleave', function() {
            produkSwiper.autoplay.start();
        });
    }
});
</script>

<section class="ulasan-section" id="ulasan">
    {{-- Section Title --}}
    <div class="section-title">
        <h2>Ulasan Pelanggan</h2>
    </div>

    {{-- Ulasan Cards Container --}}
    <div class="ulasan-container">
        {{-- Side Card Kiri --}}
        <div class="ulasan-side">
            <div class="ulasan-side-card">
                <div class="side-avatar">
                    <img src="https://i.pravatar.cc/150?img=11" alt="User">
                </div>
                <div class="side-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        {{-- Center Card (Utama) --}}
        <div class="ulasan-center">
            <div class="ulasan-center-card">
                <div class="center-avatar">
                    <img src="https://i.pravatar.cc/150?img=33" alt="User">
                </div>
                <h4 class="center-name">Nama User</h4>
                <div class="center-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="center-review">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat, nisi nec ullamcorper efficitur, turpis est hendrerit neque, nec tempus sapien tellus et sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>
        </div>

        {{-- Side Card Kanan --}}
        <div class="ulasan-side">
            <div class="ulasan-side-card">
                <div class="side-avatar">
                    <img src="https://i.pravatar.cc/150?img=15" alt="User">
                </div>
                <div class="side-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>
        </main>
        <!-- main-area-end -->
        @endsection