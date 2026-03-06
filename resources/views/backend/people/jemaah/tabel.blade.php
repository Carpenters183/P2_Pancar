@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-lg-column py-3 py-lg-6 ">



            <!--begin::Page title-->
            <div class="page-title d-flex align-items-center gap-1 me-3" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                <!--begin::Title-->
                <h1 class="text-gray-900 fw-bolder fs-2x mb-1 lh-1">
                    Account
                </h1>
                <!--end::Title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base ms-3">


                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="index708f.html?page=index" class="text-gray-700 text-hover-primary">
                            <i class="ki-duotone ki-home fs-3 text-gray-500 ms-2"></i>
                        </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                    </li>
                    <!--end::Item-->



                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        Account </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                    </li>
                    <!--end::Item-->



                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">
                        Overview </li>
                    <!--end::Item-->


                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Navs-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active"
                        href="index708f.html?page=index">
                        Overview </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index1477.html?page=account/settings">
                        Settings </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="indexbbde.html?page=account/security">
                        Security </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index93d4.html?page=account/billing">
                        Billing </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index28ff.html?page=account/statements">
                        Statements </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="indexe638.html?page=account/referrals">
                        Referrals </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="index93a9.html?page=account/api-keys">
                        API Keys </a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                        href="indexcf4a.html?page=account/logs">
                        Logs </a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->

            <!--begin::Separator-->
            <div class="app-toolbar-container-separator separator d-none d-lg-flex"></div>
            <!--end::Separator-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container">

            <!-- Header -->
            <div class="header-card">
                <div class="header-content">
                    <div>
                        <h1 class="header-title">Welcome Back! 👋</h1>
                        <p class="header-subtitle">Here's what's happening with your data today.</p>
                    </div>
                    <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#modalAddJemaah">
                        <i class="ki-duotone ki-plus fs-2"></i> Add New
                    </button>
                </div>
            </div>

            <!-- Stats -->
            <div class="stats-grid">
                @php
                    $stats = [
                        [
                            'icon' => 'profile-user',
                            'label' => 'Total Users',
                            'value' => '2,847',
                            'badge' => '+12%',
                            'color' => 'blue',
                        ],
                        [
                            'icon' => 'chart-simple',
                            'label' => 'Active Now',
                            'value' => '1,234',
                            'badge' => '+8%',
                            'color' => 'purple',
                        ],
                        [
                            'icon' => 'document',
                            'label' => 'New Records',
                            'value' => '486',
                            'badge' => '-3%',
                            'color' => 'orange',
                            'negative' => true,
                        ],
                        [
                            'icon' => 'check-circle',
                            'label' => 'Completed',
                            'value' => '892',
                            'badge' => '+24%',
                            'color' => 'green',
                        ],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon bg-{{ $stat['color'] }}">
                                <i class="ki-duotone ki-{{ $stat['icon'] }} text-{{ $stat['color'] }} fs-2x">
                                    <span class="path1"></span><span class="path2"></span>
                                </i>
                            </div>
                            <span
                                class="badge badge-{{ $stat['negative'] ?? false ? 'danger' : 'success' }}">{{ $stat['badge'] }}</span>
                        </div>
                        <h3 class="stat-label">{{ $stat['label'] }}</h3>
                        <p class="stat-value">{{ $stat['value'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Table -->
            <div class="table-container">
                <div class="table-header">
                    <div class="table-info">
                        <h2 class="table-title">User Profiles</h2>
                        <p class="table-desc">Manage your team members and their account permissions</p>
                    </div>
                    <div class="table-actions">
                        <div class="search-box">
                            <input type="text" id="searchInput" placeholder="Search users...">
                            <i class="ki-duotone ki-magnifier fs-3"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <button class="btn-filter">
                            <i class="ki-duotone ki-filter fs-3"><span class="path1"></span><span
                                    class="path2"></span></i> Filter
                        </button>
                        <button class="btn-export">
                            <i class="ki-duotone ki-exit-up fs-3"><span class="path1"></span><span
                                    class="path2"></span></i> Export
                        </button>
                    </div>
                </div>

                <table id="profileTable" class="data-table">
                    <thead>
                        <tr>
                            <th class="w-check"><input type="checkbox" class="checkbox"></th>
                            <th>Jemaah</th>
                            <th>No. Registrasi</th>
                            <th>Grup</th>
                            <th>Keberangkatan</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jamaahs as $jamaah)
                            @php
                                $person = $jamaah->people;

                                $fullname = $person->fullname ?? '-';
                                $phone = $person->phone ?? '-';

                                $reg_number = $jamaah->registration_number ?? '-';
                                $departure = $jamaah->departure_date
                                    ? \Carbon\Carbon::parse($jamaah->departure_date)->format('d M Y')
                                    : '-';

                                $group_name = $jamaah->group->name ?? 'Tanpa Grup';

                                // STATUS
                                $status_map = [
                                    'active' => ['label' => 'Aktif', 'badge' => 'success'],
                                    'pending' => ['label' => 'Pending', 'badge' => 'warning'],
                                    'cancelled' => ['label' => 'Batal', 'badge' => 'danger'],
                                    'done' => ['label' => 'Selesai', 'badge' => 'info'],
                                ];
                                $status_key = strtolower($jamaah->status ?? 'pending');
                                $status_label = $status_map[$status_key]['label'] ?? ucfirst($status_key);
                                $status_badge = $status_map[$status_key]['badge'] ?? 'secondary';

                                // PEMBAYARAN
                                $payments = $jamaah->payments;
                                $total_paid = $payments->where('status', 'paid')->sum('amount');
                                $all_paid = $payments->count() > 0 && $payments->every(fn($p) => $p->status === 'paid');
                                $has_paid = $total_paid > 0;

                                $pay_label = $all_paid ? 'Lunas' : ($has_paid ? 'DP' : 'Belum Bayar');
                                $pay_badge = $all_paid ? 'success' : ($has_paid ? 'warning' : 'danger');

                                // AVATAR
                                $colors = ['0D6EFD', '6610F2', '6F42C1', 'D63384', 'DC3545', 'FD7E14', '198754'];
                                $avatar_bg = $colors[crc32($fullname) % count($colors)];
                            @endphp

                            <tr class="table-row">
                                {{-- CHECKBOX --}}
                                <td><input type="checkbox" class="checkbox"></td>

                                {{-- JEMAAH --}}
                                <td>
                                    <div class="user-cell">
                                        <img class="avatar"
                                            src="https://ui-avatars.com/api/?name={{ urlencode($fullname) }}&background={{ $avatar_bg }}&color=fff"
                                            alt="{{ $fullname }}">
                                        <div>
                                            <div class="fw-semibold small text-dark">{{ $fullname }}</div>
                                            <div class="text-muted small">
                                                <i class="ki-duotone ki-phone fs-6"></i> {{ $phone }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                {{-- NO REGISTRASI --}}
                                <td class="small fw-semibold">{{ $reg_number }}</td>

                                {{-- GRUP --}}
                                <td class="small">{{ $group_name }}</td>

                                {{-- KEBERANGKATAN --}}
                                <td class="text-muted small">{{ $departure }}</td>

                                {{-- PEMBAYARAN --}}
                                <td>
                                    <span class="badge bg-{{ $pay_badge }}">{{ $pay_label }}</span>
                                </td>

                                {{-- STATUS --}}
                                <td>
                                    <span class="badge bg-{{ $status_badge }}">{{ $status_label }}</span>
                                </td>

                                {{-- AKSI --}}
                                <td>
                                    <div class="actions">
                                        <button class="action-btn edit" data-bs-toggle="modal"
                                            data-bs-target="#modalUpdateJamaah{{ $jamaah->id }}"
                                            data-id="{{ $jamaah->id }}">
                                            <i class="ki-duotone ki-pencil fs-4"></i>
                                        </button>

                                        <button class="action-btn view" data-bs-toggle="modal"
                                            data-bs-target="#modalViewJamaah{{ $jamaah->id }}"
                                            data-id="{{ $jamaah->id }}">
                                            <i class="ki-duotone ki-eye fs-4"></i>
                                        </button>

                                        <button class="action-btn delete"
                                            onclick="confirmDelete({{ $jamaah->id }}, '{{ addslashes($fullname) }}')">
                                            <i class="ki-duotone ki-trash fs-4"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        {{-- Modal Add Jemaah --}}
                        <div class="modal fade" id="modalAddJemaah" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content modern-modal">

                                    {{-- Header --}}
                                    <div class="modern-modal-header">
                                        <div class="modal-header-content">
                                            <div class="modal-icon-wrapper">
                                                <i class="ki-duotone ki-people fs-2x text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <div>
                                                <h3 class="modal-title">Tambah Jemaah Baru</h3>
                                                <p class="modal-subtitle">Lengkapi informasi pribadi, akun pengguna, dan
                                                    data booking jemaah</p>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-modal-close" data-bs-dismiss="modal">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </button>
                                    </div>

                                    {{-- Body --}}
                                    <div class="modern-modal-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger mb-3">
                                                <strong>Terjadi kesalahan:</strong>
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form id="addJemaahForm" method="POST" action="{{ route('jemaah.store') }}">
                                            @csrf

                                            {{-- SECTION: Informasi Akun Pengguna --}}
                                            <div class="form-section">
                                                <div class="section-header">
                                                    <i class="ki-duotone ki-user-tick fs-3 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                    <h6 class="section-title">Informasi Akun Pengguna</h6>
                                                </div>
                                                <div class="row g-3">

                                                    {{-- DEBUG: Tampilkan semua error session dan flash --}}
                                                    @if (session('error'))
                                                        <div class="alert alert-danger mt-2">{{ session('error') }}</div>
                                                    @endif
                                                    @if (session('success'))
                                                        <div class="alert alert-success mt-2">{{ session('success') }}
                                                        </div>
                                                    @endif
                                                    @if (session()->has('errors'))
                                                        <div class="alert alert-warning mt-2">
                                                            <strong>Debug Errors:</strong>
                                                            <pre>{{ print_r(session('errors')->all(), true) }}</pre>
                                                        </div>
                                                    @endif
                                                    <div class="col-md-6">
                                                        <label class="modern-label">Username <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-user input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <input type="text" name="username"
                                                                class="modern-input has-icon"
                                                                placeholder="Masukkan username" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Email <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-sms input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <input type="email" name="email"
                                                                class="modern-input has-icon" placeholder="Masukkan email"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Password <span
                                                                class="required">*</span></label>
                                                        <input type="password" name="password" class="modern-input"
                                                            placeholder="Masukkan password" required minlength="8">
                                                        <small class="form-hint">Minimal 8 karakter</small>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Konfirmasi Password <span
                                                                class="required">*</span></label>
                                                        <input type="password" name="password_confirmation"
                                                            class="modern-input" placeholder="Konfirmasi password"
                                                            required minlength="8">
                                                        <small class="form-hint">Harus sama dengan password</small>
                                                    </div>

                                                </div>
                                            </div>

                                            {{-- SECTION: Informasi Pribadi --}}
                                            <div class="form-section">
                                                <div class="section-header">
                                                    <i class="ki-duotone ki-profile-circle fs-3 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                    <h6 class="section-title">Informasi Pribadi</h6>
                                                </div>
                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Nama Lengkap <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-badge input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                            </i>
                                                            <input type="text" name="fullname"
                                                                class="modern-input has-icon"
                                                                placeholder="Masukkan nama lengkap" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label class="modern-label">Jenis Kelamin <span
                                                                class="required">*</span></label>
                                                        <select name="gender" class="modern-select" required>
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="L">Laki-laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label class="modern-label">Nomor Telepon <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-phone input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <input type="tel" name="phone"
                                                                class="modern-input has-icon" placeholder="08xxxxxxxxxx"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Tempat Lahir <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-map input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                            <input type="text" name="birth_place"
                                                                class="modern-input has-icon"
                                                                placeholder="Masukkan tempat lahir" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Tanggal Lahir <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-calendar input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <input type="date" name="birth_date"
                                                                class="modern-input has-icon" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="modern-label">Alamat Lengkap <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-geolocation input-icon-textarea">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <textarea name="address" class="modern-textarea has-icon-textarea" rows="3"
                                                                placeholder="Masukkan alamat lengkap sesuai KTP" required></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            {{-- SECTION: Data Booking --}}
                                            <div class="form-section">
                                                <div class="section-header">
                                                    <i class="ki-duotone ki-airplane fs-3 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <h6 class="section-title">Data Booking</h6>
                                                </div>
                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Tipe Paket <span
                                                                class="required">*</span></label>
                                                        <select name="package_type" id="packageType"
                                                            class="modern-select" required>
                                                            <option value="">-- Pilih Tipe Paket --</option>
                                                            @foreach ($package_types as $type)
                                                                <option value="{{ strtolower($type) }}">
                                                                    {{ ucfirst($type) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Paket <span
                                                                class="required">*</span></label>
                                                        <select name="package_id" id="packageSelect"
                                                            class="modern-select" required disabled>
                                                            <option value="">-- Pilih Tipe Dulu --</option>
                                                        </select>
                                                    </div>

                                                    {{-- GRUP --}}
                                                    <div class="col-md-6">
                                                        <label class="modern-label">Grup</label>
                                                        <select name="group_id" id="groupSelect" class="modern-select"
                                                            required disabled>
                                                            <option value="">-- Pilih Group --</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="modern-label">Tanggal Keberangkatan <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon">
                                                            <i class="ki-duotone ki-calendar input-icon">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <input type="date" name="departure_date"
                                                                id="departureDate" class="modern-input has-icon" required>
                                                        </div>
                                                        <small class="form-hint">Otomatis terisi saat memilih paket</small>
                                                    </div>

                                                    {{-- STATUS --}}
                                                    <div class="col-md-6">
                                                        <label class="modern-label">Status <span
                                                                class="required">*</span></label>
                                                        <select name="status" class="modern-select" required>
                                                            <option value="draft" selected>Draft</option>
                                                            <option value="booked">Booked</option>
                                                            <option value="paid">Paid</option>
                                                            <option value="documents_verified">Documents Verified</option>
                                                            <option value="ready">Ready</option>
                                                            <option value="departed">Departed</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modern-modal-footer">
                                                <button type="button" class="btn-modal-cancel" data-bs-dismiss="modal">
                                                    <i class="ki-duotone ki-cross-circle fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn-modal-submit" form="addJemaahForm">
                                                    <i class="ki-duotone ki-check-circle fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    Simpan Data Jemaah
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                    {{-- Footer --}}

                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>


                <div class="table-footer">
                    <div class="pagination-info">Showing <b>1</b> to <b>5</b> of <b>47</b> results</div>
                    <nav class="pagination">
                        <button class="page-btn disabled">Previous</button>
                        <button class="page-btn active">1</button>
                        <button class="page-btn">2</button>
                        <button class="page-btn">3</button>
                        <span class="dots">...</span>
                        <button class="page-btn">10</button>
                        <button class="page-btn">Next</button>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <script>
        // Data dari Laravel
        const packagesData = @json($packages);
        const groupsData = @json($groups);

        const packageType = document.getElementById('packageType');
        const packageSelect = document.getElementById('packageSelect');
        const groupSelect = document.getElementById('groupSelect');
        const departureDate = document.getElementById('departureDate');

        // --- Pilih Tipe Paket ---
        packageType.addEventListener('change', function() {
            const selectedType = this.value;

            // Reset paket & grup & tanggal
            packageSelect.innerHTML = '<option value="">-- Pilih Paket --</option>';
            packageSelect.disabled = true;

            groupSelect.innerHTML = '<option value="">-- Pilih Paket Dulu --</option>';
            groupSelect.disabled = true;

            departureDate.value = '';

            if (!selectedType) return;

            // Filter paket berdasarkan tipe dan status 'published'
            const filteredPackages = packagesData.filter(p =>
                p.type.toLowerCase() === selectedType.toLowerCase() &&
                p.status.toLowerCase() === 'published'
            );

            if (filteredPackages.length === 0) {
                packageSelect.innerHTML = '<option value="">Tidak ada paket tersedia</option>';
                return;
            }

            filteredPackages.forEach(p => {
                const option = document.createElement('option');
                option.value = p.id;
                option.textContent = `${p.name} - Rp ${Number(p.price).toLocaleString('id-ID')}`;
                option.dataset.departure = p.departure_date;
                packageSelect.appendChild(option);
            });

            packageSelect.disabled = false;
        });

        // --- Pilih Paket ---
        packageSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const selectedId = selectedOption.value;

            // Reset grup & tanggal
            groupSelect.innerHTML = '<option value="">-- Pilih Paket Dulu --</option>';
            groupSelect.disabled = true;
            departureDate.value = '';

            if (!selectedId) return;

            const selectedPackage = packagesData.find(p => p.id == selectedId);
            if (!selectedPackage) return;

            // Filter grup berdasarkan package_id saja
            const relatedGroups = groupsData.filter(g => g.package_id == selectedPackage.id);

            if (relatedGroups.length === 0) {
                groupSelect.innerHTML = '<option value="">Tidak ada grup tersedia</option>';
            } else {
                relatedGroups.forEach(g => {
                    const option = document.createElement('option');
                    option.value = g.id;
                    option.textContent = g.name;
                    groupSelect.appendChild(option);
                });
            }

            groupSelect.disabled = false;

            // Auto fill tanggal keberangkatan
            departureDate.value = selectedPackage.departure_date;
        });
    </script>
@endsection
