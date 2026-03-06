@extends('backend.master')

@section('title')
    <title>Detail Paket {{ ucfirst($package->type) }} | Admin</title>
@endsection

@push('styles')
    <style>
        .package-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2.5rem;
            border-radius: 15px;
            margin-bottom: 2.5rem;
        }

        .info-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            overflow: hidden;
        }

        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
        }

        .info-card .card-header {
            border-bottom: 2px solid #f1f3f5;
            background: #f8f9fa;
        }

        .price-tag {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.3);
        }

        .price-tag h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }

        .price-tag .price-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .itinerary-card {
            border-left: 4px solid #667eea;
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .itinerary-card:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .itinerary-card::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 24px;
            width: 18px;
            height: 18px;
            background: #667eea;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .day-badge {
            background: #667eea;
            color: white;
            padding: 0.35rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-list li {
            padding: 1rem 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
        }

        .feature-list li:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .feature-list li i {
            color: #667eea;
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .status-badge-large {
            font-size: 1rem;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
        }

        .btn-booking {
            padding: 1rem 3rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-booking:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 0.75rem;
            border-radius: 8px;
            transition: background 0.2s ease;
        }

        .info-row:hover {
            background: #f8f9fa;
        }

        .info-row i {
            width: 35px;
            color: #667eea;
            font-size: 1.3rem;
        }

        .info-row small {
            font-size: 0.8rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #667eea;
            display: inline-block;
        }

        /* Spacing utilities */
        .g-3 {
            gap: 1rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .package-hero {
                padding: 1.5rem;
            }

            .price-tag h2 {
                font-size: 2rem;
            }

            .btn-booking {
                padding: 0.75rem 2rem;
                font-size: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-lg-column py-3 py-lg-6">

            <!--begin::Page title-->
            <div class="page-title d-flex align-items-center gap-1 me-3">
                <h1 class="text-gray-900 fw-bolder fs-2x mb-1 lh-1">
                    Detail Paket {{ ucfirst($package->type) }}
                </h1>
            </div>
            <!--end::Page title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base">
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                    <a href="" class="text-gray-700 text-hover-primary">
                        <i class="ki-duotone ki-home fs-3 text-gray-500 ms-2"></i>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                </li>
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                    <a href="" class="text-gray-700 text-hover-primary">
                        Paket {{ ucfirst($package->type) }}
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                </li>
                <li class="breadcrumb-item text-gray-500">
                    Detail
                </li>
            </ul>
            <!--end::Breadcrumb-->

        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!-- Hero Section -->
            <div class="package-hero mb-5">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center mb-2">
                            <h1 class="mb-0 me-3">{{ $package->name }}</h1>
                            <span
                                class="status-badge-large badge 
                                @if ($package->status == 'published') bg-success
                                @elseif($package->status == 'draft') bg-warning
                                @else bg-danger @endif">
                                {{ strtoupper($package->status) }}
                            </span>
                        </div>
                        <p class="mb-0 opacity-75">
                            <i class="bi bi-calendar-event me-2"></i>
                            Keberangkatan: {{ \Carbon\Carbon::parse($package->departure_date)->format('d M Y') }}
                            <span class="mx-2">|</span>
                            <i class="bi bi-clock me-2"></i>
                            {{ $package->duration_days }} Hari
                        </p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <a href="" class="btn btn-light btn-booking me-2">
                            <i class="bi bi-calendar-check me-2"></i>
                            Booking Sekarang
                        </a>
                        <a href="" class="btn btn-outline-light">
                            <i class="bi bi-pencil"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row g-5">
                <!-- Left Column -->
                <div class="col-lg-8">

                    <!-- Package Info Cards -->
                    <div class="row g-3 mb-5">
                        <div class="col-md-4">
                            <div class="card info-card">
                                <div class="card-body text-center p-4">
                                    <div class="icon-box bg-primary bg-opacity-10 mx-auto">
                                        <i class="bi bi-airplane text-primary"></i>
                                    </div>
                                    <h6 class="text-muted mb-1">Maskapai</h6>
                                    <h5 class="mb-0 fw-bold">{{ $package->airline }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card info-card">
                                <div class="card-body text-center p-4">
                                    <div class="icon-box bg-success bg-opacity-10 mx-auto">
                                        <i class="bi bi-people text-success"></i>
                                    </div>
                                    <h6 class="text-muted mb-1">Kuota Tersedia</h6>
                                    <h5 class="mb-0 fw-bold">{{ $package->quota - ($package->quota_used ?? 0) }} /
                                        {{ $package->quota }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card info-card">
                                <div class="card-body text-center p-4">
                                    <div class="icon-box bg-warning bg-opacity-10 mx-auto">
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <h6 class="text-muted mb-1">Rating Hotel</h6>
                                    <h5 class="mb-0 fw-bold">{{ $package->hotel_rating }} ⭐</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package Details Card -->
                    <div class="card info-card mb-5">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0 fw-bold">
                                <i class="bi bi-info-circle text-primary me-2"></i>Detail Paket
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="info-row">
                                        <i class="bi bi-tag-fill"></i>
                                        <div>
                                            <small class="text-muted d-block">Kode Paket</small>
                                            <strong>{{ $package->code }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="bi bi-link-45deg"></i>
                                        <div>
                                            <small class="text-muted d-block">Slug</small>
                                            <strong>{{ $package->slug }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="bi bi-geo-alt-fill"></i>
                                        <div>
                                            <small class="text-muted d-block">Kota Keberangkatan</small>
                                            <strong>{{ $package->departure_city }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="bi bi-pin-map-fill"></i>
                                        <div>
                                            <small class="text-muted d-block">Kota Tujuan</small>
                                            <strong>{{ $package->destination_city }}</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-row">
                                        <i class="bi bi-building"></i>
                                        <div>
                                            <small class="text-muted d-block">Hotel Makkah</small>
                                            <strong>{{ $package->hotel_makkah }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="bi bi-building"></i>
                                        <div>
                                            <small class="text-muted d-block">Hotel Madinah</small>
                                            <strong>{{ $package->hotel_madinah }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="bi bi-calendar-range"></i>
                                        <div>
                                            <small class="text-muted d-block">Durasi</small>
                                            <strong>{{ $package->duration_days }} Hari</strong>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <i class="bi bi-list-ul"></i>
                                        <div>
                                            <small class="text-muted d-block">Tipe Paket</small>
                                            <strong>{{ ucfirst($package->type) }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($package->detail)
                        <!-- Description Card -->
                        <div class="card info-card mb-5">
                            <div class="card-header bg-white py-3">
                                <h5 class="mb-0 fw-bold">
                                    <i class="bi bi-file-text text-primary me-2"></i>Deskripsi
                                </h5>
                            </div>
                            <div class="card-body p-4">
                                <p class="text-muted mb-0">{!! nl2br(e($package->detail->description)) !!}</p>
                            </div>
                        </div>

                        <!-- Includes & Excludes -->
                        <div class="row g-3 mb-5">
                            <div class="col-md-6">
                                <div class="card info-card h-100">
                                    <div class="card-header bg-white py-3">
                                        <h5 class="mb-0 fw-bold">
                                            <i class="bi bi-check-circle text-success me-2"></i>Termasuk
                                        </h5>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="text-muted">{!! nl2br(e($package->detail->includes)) !!}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card info-card h-100">
                                    <div class="card-header bg-white py-3">
                                        <h5 class="mb-0 fw-bold">
                                            <i class="bi bi-x-circle text-danger me-2"></i>Tidak Termasuk
                                        </h5>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="text-muted">{!! nl2br(e($package->detail->excludes)) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Terms Card -->
                        <div class="card info-card mb-5">
                            <div class="card-header bg-white py-3">
                                <h5 class="mb-0 fw-bold">
                                    <i class="bi bi-clipboard-check text-primary me-2"></i>Syarat & Ketentuan
                                </h5>
                            </div>
                            <div class="card-body p-4">
                                <p class="text-muted mb-0">{!! nl2br(e($package->detail->terms)) !!}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Itinerary Card -->
                    <div class="card info-card mb-5">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0 fw-bold">
                                <i class="bi bi-map text-primary me-2"></i>Itinerary Perjalanan
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            @forelse($package->itineraries as $item)
                                <div class="itinerary-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <span class="day-badge">Hari {{ $item->day_number }}</span>
                                    </div>
                                    <h6 class="fw-bold mb-2">{{ $item->title }}</h6>
                                    <p class="text-muted mb-0">{{ $item->description }}</p>
                                </div>
                            @empty
                                <div class="text-center py-5">
                                    <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                                    <p class="text-muted mt-3">Belum ada itinerary tersedia.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>

                <!-- Right Column - Pricing -->
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 80px;">

                        <!-- Main Price -->
                        <div class="price-tag mb-4">
                            <p class="price-label mb-2">Mulai dari</p>
                            <h2>Rp {{ number_format($package->price) }}</h2>
                            <p class="mb-0 price-label">Per Orang (Quad)</p>
                        </div>

                        <!-- Price Details -->
                        <div class="card info-card mb-4">
                            <div class="card-header py-3">
                                <h6 class="mb-0 fw-bold">Rincian Harga</h6>
                            </div>
                            <div class="card-body p-0">
                                <ul class="feature-list px-3 py-2">
                                    <li>
                                        <i class="bi bi-people-fill"></i>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Harga Quad</span>
                                                <strong>Rp {{ number_format($package->price) }}</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="bi bi-people-fill"></i>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Harga Triple</span>
                                                <strong>Rp {{ number_format($package->price_triple) }}</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="bi bi-people-fill"></i>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Harga Double</span>
                                                <strong>Rp {{ number_format($package->price_double) }}</strong>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="bi bi-cash-coin"></i>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Down Payment (DP)</span>
                                                <strong class="text-primary">Rp {{ number_format($package->dp) }}</strong>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="card info-card mb-4">
                            <div class="card-body p-4">
                                <a href="{{ route('package.booking', [$package->type, $package->id]) }}"
                                    class="btn btn-primary w-100 mb-3 py-3 fw-bold">
                                    <i class="bi bi-calendar-check me-2"></i>
                                    Booking Paket Ini
                                </a>
                                <a href="https://wa.me/{{ config('app.whatsapp_number') }}?text=Halo, saya tertarik dengan paket {{ $package->name }}"
                                    target="_blank" class="btn btn-outline-primary w-100 mb-3 py-2">
                                    <i class="bi bi-whatsapp me-2"></i>
                                    Hubungi via WhatsApp
                                </a>
                                <a href="" class="btn btn-outline-secondary w-100 py-2">
                                    <i class="bi bi-download me-2"></i>
                                    Download Brosur
                                </a>
                            </div>
                        </div>

                        <!-- Quick Info -->
                        <div class="card info-card">
                            <div class="card-header py-3">
                                <h6 class="mb-0 fw-bold">
                                    <i class="bi bi-info-circle me-2"></i>Informasi Penting
                                </h6>
                            </div>
                            <div class="card-body p-0">
                                <ul class="feature-list px-3 py-2">
                                    <li>
                                        <i class="bi bi-shield-check"></i>
                                        <small>Harga sudah termasuk tiket pesawat</small>
                                    </li>
                                    <li>
                                        <i class="bi bi-building"></i>
                                        <small>Hotel bintang {{ $package->hotel_rating }}</small>
                                    </li>
                                    <li>
                                        <i class="bi bi-clock-history"></i>
                                        <small>Free konsultasi 24/7</small>
                                    </li>
                                    <li>
                                        <i class="bi bi-award"></i>
                                        <small>Pembimbing berpengalaman</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end::Content-->
@endsection
