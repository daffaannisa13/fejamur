@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar Kiri -->
    <div class="cart-sidebar flex flex-col">
        <!-- Logo -->
        <div class="cart-sidebar-logo">
            <img src="{{ asset('assets/img/alda/logo.png') }}" alt="Logo">
            <span>Keripik Jamur</span>
        </div>

        <!-- Menu -->
        <nav class="flex-1">
            <a href="#" class="cart-nav-item active">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="#" class="cart-nav-item">
                <i class="fas fa-shopping-cart"></i>
                <span>Pesanan</span>
            </a>
            <a href="#" class="cart-nav-item">
                <i class="fas fa-history"></i>
                <span>Histori Pembelian</span>
            </a>
        </nav>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 flex overflow-hidden">
        <!-- Area Produk (Tengah) -->
        <div class="flex-1 overflow-y-auto p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Halo, Jhon Doe</h1>
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <input type="text" 
                               class="border border-gray-300 rounded-lg pl-10 pr-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-green-500" 
                               placeholder="Cari...">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="p-2 hover:bg-gray-200 rounded-lg">
                        <i class="fas fa-comments text-gray-600"></i>
                    </button>
                    <button class="p-2 hover:bg-gray-200 rounded-lg">
                        <i class="fas fa-shopping-cart text-gray-600"></i>
                    </button>
                </div>
            </div>

            <!-- Banner Diskon -->
            <div class="cart-banner">
                <div class="cart-banner-shape-1"></div>
                <div class="cart-banner-shape-2"></div>
                <div class="cart-banner-shape-3"></div>
                
                <div class="cart-banner-content">
                    <div class="cart-banner-image">
                        <img src="{{ asset('assets/img/alda/diskon.png') }}" alt="Keripik Jamur">
                    </div>
                    
                    <div class="cart-banner-text">
                        <h2 class="cart-banner-title">GET SPECIAL</h2>
                        <h3 class="cart-banner-title">DISCOUNT</h3>
                        <div class="cart-banner-discount">
                            <span class="cart-banner-discount-number">35</span>
                            <span class="cart-banner-discount-percent">%</span>
                        </div>
                        <p class="cart-banner-off">OFF</p>
                        
                        <div class="cart-banner-info">
                            <div class="cart-banner-info-item">
                                <div class="cart-banner-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <span class="font-medium">123-456-7890</span>
                            </div>
                            <div class="cart-banner-info-item">
                                <div class="cart-banner-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <span class="font-medium">Malang</span>
                            </div>
                        </div>
                        
                        <div class="cart-banner-code">
                            <div class="cart-banner-code-text">CODE: JMRCRSPY123</div>
                            <div class="cart-banner-code-valid">VALID UNTIL 30 MAY 2030</div>
                        </div>
                    </div>
                    
                    <div class="cart-banner-barcode">
                        <div class="cart-banner-barcode-lines">
                            <div class="cart-banner-barcode-line dark"></div>
                            <div class="cart-banner-barcode-line light"></div>
                            <div class="cart-banner-barcode-line dark"></div>
                            <div class="cart-banner-barcode-line light"></div>
                            <div class="cart-banner-barcode-line dark"></div>
                            <div class="cart-banner-barcode-line light"></div>
                            <div class="cart-banner-barcode-line dark"></div>
                            <div class="cart-banner-barcode-line light"></div>
                            <div class="cart-banner-barcode-line dark"></div>
                            <div class="cart-banner-barcode-line light"></div>
                            <div class="cart-banner-barcode-line dark"></div>
                        </div>
                        <div class="cart-banner-url">WWW.KRIPIKALDA.COM</div>
                    </div>
                </div>
            </div>

            <!-- Grid Produk -->
            <div class="cart-product-grid">
                <!-- Produk 1 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-original.png') }}" 
                             alt="Keripik Jamur Rasa Original" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa Original</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-bbq.png') }}" 
                             alt="Keripik Jamur Rasa BBQ" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa BBQ</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-balado.png') }}" 
                             alt="Keripik Jamur Rasa Balado" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa Balado</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-ayam-panggang.png') }}" 
                             alt="Keripik Jamur Rasa Ayam Panggang" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa Ayam Panggang</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-pedas.png') }}" 
                             alt="Keripik Jamur Rasa Pedas" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa Pedas</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-original.png') }}" 
                             alt="Keripik Jamur Rasa Original" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa Original</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 7 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-bbq.png') }}" 
                             alt="Keripik Jamur Rasa BBQ" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa BBQ</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 8 -->
                <div class="cart-product-card">
                    <div class="cart-product-card-content">
                        <img src="{{ asset('assets/img/alda/produk-balado.png') }}" 
                             alt="Keripik Jamur Rasa Balado" 
                             class="cart-product-image">
                        <h3 class="cart-product-title">Keripik Jamur Rasa Balado</h3>
                        <p class="cart-product-size">Ukuran: 500 G</p>
                        <div class="cart-product-footer">
                            <span class="cart-product-price">Rp 20.000</span>
                            <button class="cart-product-add-btn">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi -->
            <div class="cart-recommendation-section">
                <h2 class="cart-recommendation-title">Rekomendasi Buat Kamu</h2>
                <div class="cart-product-grid">
                    <div class="cart-product-card">
                        <div class="cart-product-card-content">
                            <img src="{{ asset('assets/img/alda/produk-pedas.png') }}" 
                                 alt="Keripik Jamur Rasa Pedas" 
                                 class="cart-product-image">
                            <h3 class="cart-product-title">Keripik Jamur Rasa Pedas</h3>
                            <p class="cart-product-size">500 gram</p>
                            <div class="cart-product-footer">
                                <span class="cart-product-price">Rp 20.000</span>
                                <button class="cart-product-add-btn">
                                    <i class="fas fa-plus text-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="cart-product-card">
                        <div class="cart-product-card-content">
                            <img src="{{ asset('assets/img/alda/produk-original.png') }}" 
                                 alt="Keripik Jamur Rasa Original" 
                                 class="cart-product-image">
                            <h3 class="cart-product-title">Keripik Jamur Rasa Original</h3>
                            <p class="cart-product-size">500 gram</p>
                            <div class="cart-product-footer">
                                <span class="cart-product-price">Rp 20.000</span>
                                <button class="cart-product-add-btn">
                                    <i class="fas fa-plus text-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="cart-product-card">
                        <div class="cart-product-card-content">
                            <img src="{{ asset('assets/img/alda/produk-balado.png') }}" 
                                 alt="Keripik Jamur Rasa Balado" 
                                 class="cart-product-image">
                            <h3 class="cart-product-title">Keripik Jamur Rasa Balado</h3>
                            <p class="cart-product-size">500 gram</p>
                            <div class="cart-product-footer">
                                <span class="cart-product-price">Rp 20.000</span>
                                <button class="cart-product-add-btn">
                                    <i class="fas fa-plus text-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Kanan - Rincian Pesanan -->
        <div class="cart-order-sidebar">
            <div class="cart-order-header">
                <h2 class="cart-order-title">Rincian Pesanan</h2>
                <button class="cart-order-badge">Pesanan Masuk (3)</button>
            </div>

            <div class="cart-order-address">
                <div class="cart-order-address-content">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p class="cart-order-address-title">Jl. Hayam Wuruk No.18</p>
                        <p class="cart-order-address-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
                <button class="cart-order-address-btn">Lihat</button>
            </div>

            <button class="cart-order-note-btn">Tambah Catatan</button>

            <div class="cart-order-items">
                <div class="cart-order-item">
                    <img src="{{ asset('assets/img/alda/produk-balado.png') }}" 
                         alt="Keripik Jamur Rasa Balado" 
                         class="cart-order-item-image">
                    <div class="cart-order-item-info">
                        <h4 class="cart-order-item-title">Keripik Jamur Rasa Balado</h4>
                        <p class="cart-order-item-size">Ukuran: 500 G</p>
                        <p class="cart-order-item-price">Rp 20.000</p>
                    </div>
                    <div class="cart-order-item-controls">
                        <button class="cart-order-item-btn">
                            <i class="fas fa-minus text-xs"></i>
                        </button>
                        <span class="cart-order-item-quantity">1</span>
                        <button class="cart-order-item-btn add">
                            <i class="fas fa-plus text-xs"></i>
                        </button>
                    </div>
                    <button class="cart-order-item-delete">
                        <i class="fas fa-trash text-sm"></i>
                    </button>
                </div>

                <div class="cart-order-item">
                    <img src="{{ asset('assets/img/alda/produk-bbq.png') }}" 
                         alt="Keripik Jamur Rasa BBQ" 
                         class="cart-order-item-image">
                    <div class="cart-order-item-info">
                        <h4 class="cart-order-item-title">Keripik Jamur Rasa BBQ</h4>
                        <p class="cart-order-item-size">Ukuran: 500 G</p>
                        <p class="cart-order-item-price">Rp 20.000</p>
                    </div>
                    <div class="cart-order-item-controls">
                        <button class="cart-order-item-btn">
                            <i class="fas fa-edit text-xs"></i>
                        </button>
                        <span class="cart-order-item-quantity">1</span>
                        <button class="cart-order-item-btn add">
                            <i class="fas fa-plus text-xs"></i>
                        </button>
                    </div>
                    <button class="cart-order-item-delete">
                        <i class="fas fa-trash text-sm"></i>
                    </button>
                </div>

                <div class="cart-order-item">
                    <img src="{{ asset('assets/img/alda/produk-original.png') }}" 
                         alt="Keripik Jamur Rasa Original" 
                         class="cart-order-item-image">
                    <div class="cart-order-item-info">
                        <h4 class="cart-order-item-title">Keripik Jamur Rasa Original</h4>
                        <p class="cart-order-item-size">Ukuran: 500 G</p>
                        <p class="cart-order-item-price">Rp 20.000</p>
                    </div>
                    <div class="cart-order-item-controls">
                        <button class="cart-order-item-btn">
                            <i class="fas fa-edit text-xs"></i>
                        </button>
                        <span class="cart-order-item-quantity">1</span>
                        <button class="cart-order-item-btn add">
                            <i class="fas fa-plus text-xs"></i>
                        </button>
                    </div>
                    <button class="cart-order-item-delete">
                        <i class="fas fa-trash text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="cart-order-summary">
                <div class="cart-order-summary-row">
                    <span class="cart-order-summary-label">Total Pesanan</span>
                    <span class="cart-order-summary-value">Rp 60.000</span>
                </div>
                <div class="cart-order-summary-row">
                    <span class="cart-order-summary-label">Potongan Harga</span>
                    <span class="cart-order-summary-value discount">Rp 20.000</span>
                </div>
                <div class="cart-order-summary-total">
                    <span class="cart-order-summary-total-label">Total Pembayaran</span>
                    <span class="cart-order-summary-total-value">Rp 50.000</span>
                </div>
            </div>

            <div class="cart-order-actions">
                <button class="cart-order-discount-btn">
                    <span>Tambah Potongan Harga</span>
                    <i class="fas fa-chevron-right text-sm"></i>
                </button>
                <button class="cart-order-pay-btn">Bayar Sekarang</button>
            </div>
        </div>
    </div>
</div>
@endsection