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
                    <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#modalAddAgent">
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
                            <th class="w-user">User</th>
                            <th class="w-email">Email</th>
                            <th class="w-role">Role</th>
                            <th class="w-status">Status</th>
                            <th class="w-active">Last Active</th>
                            <th class="w-actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agents as $agent)
                            @php
                                $person = $agent->people;
                                $user = $agent->user ?? null; // ✅ ambil dari agent langsung

                                $fullname = $person->fullname ?? '-';
                                $username = $user->username ?? '-';
                                $email = $user->email ?? '-';

                                // ROLE
                                $role_name =
                                    $user && $user->roles->count() ? strtolower($user->roles->first()->name) : 'agent';

                                $role = ucfirst($role_name);

                                $role_colors = [
                                    'admin' => 'danger',
                                    'super admin' => 'dark',
                                    'agent' => 'warning',
                                ];

                                $role_badge = $role_colors[$role_name] ?? 'secondary';

                                $is_active = $user && $user->is_active == 1;
                                $status_text = $is_active ? 'Active' : 'Inactive';
                                $status_badge = $is_active ? 'success' : 'danger';

                                // LAST LOGIN
                                $active =
                                    $user && $user->last_login_at
                                        ? \Carbon\Carbon::parse($user->last_login_at)->format('d M Y H:i')
                                        : 'Never Login';

                                // AVATAR COLOR
                                $colors = ['0D6EFD', '6610F2', '6F42C1', 'D63384', 'DC3545', 'FD7E14', '198754'];
                                $avatar_bg = $colors[crc32($fullname) % count($colors)];
                            @endphp



                            <tr class="table-row">
                                <td><input type="checkbox" class="checkbox"></td>
                                <td>
                                    <div class="user-cell">
                                        <img class="avatar"
                                            src="https://ui-avatars.com/api/?name={{ urlencode($fullname) }}&background={{ $avatar_bg }}&color=fff"
                                            alt="{{ $fullname }}">

                                        <div>
                                            <!-- USERNAME -->
                                            <div class="fw-semibold small text-dark">
                                                {{ $username }}
                                            </div>

                                            <!-- FULLNAME -->
                                            <div class="text-muted small">
                                                {{ $fullname }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="email">{{ $email }}</td>
                                <td>
                                    <span class="badge bg-{{ $role_badge }}">
                                        {{ $role }}
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-{{ $status_badge }}">
                                        {{ $status_text }}
                                    </span>
                                </td>
                                <td class="text-muted">{{ $active }}</td>
                                <td>
                                    <div class="actions">
                                        <!-- Tombol Edit dengan data attribute -->
                                        <button class="action-btn edit" data-bs-toggle="modal"
                                            data-bs-target="#modalUpdateAgent{{ $agent->id }}"
                                            data-id="{{ $agent->id }}">
                                            <i class="ki-duotone ki-pencil fs-4"></i>
                                        </button>

                                        <button class="action-btn view"data-bs-toggle="modal"
                                            data-bs-target="#modalViewAgent{{ $agent->id }}"
                                            data-id="{{ $agent->id }}">
                                            <i class="ki-duotone ki-eye fs-4"></i>
                                        </button>

                                        <button class="action-btn delete" title="Delete"
                                            data-agent-id="{{ $agent->id }}"
                                            data-agent-name="{{ $agent->people->fullname }}"
                                            onclick="confirmDelete({{ $agent->id }}, '{{ addslashes($agent->people->fullname) }}')">
                                            <i class="ki-duotone ki-trash fs-4"></i>
                                        </button>



                                    </div>
                                </td>
                            </tr>
                            <!-- Modal Update/Edit Agent -->
                            <div class="modal fade" id="modalUpdateAgent{{ $agent->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content modern-modal">

                                        <!-- Header -->
                                        <div class="modern-modal-header">
                                            <div class="modal-header-content">
                                                <div class="modal-icon-wrapper">
                                                    <i class="ki-duotone ki-pencil fs-2x text-warning">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div>
                                                    <h3 class="modal-title">Edit Data Agen</h3>
                                                    <p class="modal-subtitle">Perbarui informasi pribadi, akun pengguna,
                                                        dan
                                                        data agen</p>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-modal-close" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                        </div>

                                        <!-- Body -->
                                        <div class="modern-modal-body">
                                            <form id="updateAgentForm{{ $agent->id }}" method="POST"
                                                action="{{ route('agent.update', $agent->id) }}">
                                                @csrf
                                                @method('PUT')

                                                <!-- Hidden ID -->
                                                <input type="hidden" name="agent_id" id="agent_id"
                                                    value="{{ $agent->id ?? '' }}">
                                                <input type="hidden" name="user_id" id="user_id"
                                                    value="{{ $agent->user->id ?? '' }}">
                                                <input type="hidden" name="people_id" id="people_id"
                                                    value="{{ $agent->people->id ?? '' }}">

                                                <!-- Informasi Akun Pengguna -->
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
                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Username <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-user input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="text" name="username" id="edit_username"
                                                                    class="modern-input has-icon"
                                                                    placeholder="Masukkan username"
                                                                    value="{{ $agent->user->username ?? '' }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Email <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-sms input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="email" name="email" id="edit_email"
                                                                    class="modern-input has-icon"
                                                                    placeholder="Masukkan email"
                                                                    value="{{ $agent->user->email ?? '' }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Password Baru
                                                            </label>
                                                            <input type="password" id="edit_password" name="password"
                                                                class="modern-input"
                                                                placeholder="Kosongkan jika tidak diubah" minlength="8">
                                                            <small class="form-hint">Kosongkan jika tidak ingin mengubah
                                                                password</small>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Konfirmasi Password Baru
                                                            </label>
                                                            <input type="password" id="edit_password_confirmation"
                                                                name="password_confirmation" class="modern-input"
                                                                placeholder="Konfirmasi password baru" minlength="8">
                                                            <small class="form-hint">Harus sama dengan password
                                                                baru</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Informasi Pribadi (People) -->
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
                                                            <label class="modern-label">
                                                                Nama Lengkap <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-badge input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                                <input type="text" name="fullname" id="edit_fullname"
                                                                    class="modern-input has-icon"
                                                                    placeholder="Masukkan nama lengkap"
                                                                    value="{{ $agent->people->fullname ?? '' }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label class="modern-label">
                                                                Jenis Kelamin <span class="required">*</span>
                                                            </label>
                                                            <select name="sex" id="edit_sex" class="modern-select"
                                                                readonly>
                                                                <option value="">Pilih Jenis Kelamin</option>
                                                                <option value="L"
                                                                    {{ ($agent->people->gender ?? '') == 'L' ? 'selected' : '' }}>
                                                                    Laki-laki</option>
                                                                <option value="P"
                                                                    {{ ($agent->people->gender ?? '') == 'P' ? 'selected' : '' }}>
                                                                    Perempuan</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label class="modern-label">
                                                                Nomor Telepon <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-phone input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="tel" name="phone" id="edit_phone"
                                                                    class="modern-input has-icon"
                                                                    placeholder="08xxxxxxxxxx"
                                                                    value="{{ $agent->people->phone ?? '' }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Tempat Lahir <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-map input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                                <input type="text" name="pob" id="edit_pob"
                                                                    class="modern-input has-icon"
                                                                    placeholder="Masukkan tempat lahir"
                                                                    value="{{ $agent->people->birth_place ?? '' }}"
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Tanggal Lahir <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-calendar input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="date" name="bod" id="edit_bod"
                                                                    class="modern-input has-icon"
                                                                    value="{{ $agent->people->birth_date ?? '' }}"
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <label class="modern-label">
                                                                Alamat Lengkap <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-geolocation input-icon-textarea">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <textarea name="address" id="edit_address" class="modern-textarea has-icon-textarea" rows="3"
                                                                    placeholder="Masukkan alamat lengkap sesuai KTP" required>{{ $agent->people->address ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Informasi Perusahaan -->
                                                <div class="form-section">
                                                    <div class="section-header">
                                                        <i class="ki-duotone ki-bank fs-3 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <h6 class="section-title">Informasi Perusahaan</h6>
                                                    </div>
                                                    <div class="row g-3">
                                                        <!-- Pilih Perusahaan -->
                                                        <div class="col-md-6">
                                                            <label class="modern-label">Pilih Perusahaan</label>
                                                            <select id="edit_companySelect" name="company_id"
                                                                class="modern-select" readonly>
                                                                <option value="">-- Pilih Perusahaan --</option>
                                                                @foreach ($companies as $company)
                                                                    <option value="{{ $company->id }}"
                                                                        data-name="{{ $company->name }}"
                                                                        data-address="{{ $company->main_address ?? '' }}"
                                                                        data-ppiu="{{ $company->ppiu_license_number ?? '' }}"
                                                                        data-pihk="{{ $company->pihk_license_number ?? '' }}"
                                                                        {{ ($agent->company_id ?? '') == $company->id ? 'selected' : '' }}>
                                                                        {{ $company->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <!-- Pilih Cabang / Office -->
                                                        <div class="col-md-6">
                                                            <label class="modern-label">Pilih Cabang</label>
                                                            <select id="edit_officeSelect" name="office_id"
                                                                class="modern-select">
                                                                <option value="">-- Pilih Cabang --</option>
                                                                @foreach ($offices as $office)
                                                                    <option value="{{ $office->id }}"
                                                                        data-company="{{ $office->company_id }}"
                                                                        data-address="{{ $office->address }}"
                                                                        {{ ($agent->office_id ?? '') == $office->id ? 'selected' : '' }}>
                                                                        {{ $office->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <!-- Nama Perusahaan -->
                                                        <div class="col-md-6">
                                                            <label class="modern-label">
                                                                Nama Perusahaan <span class="required">*</span>
                                                            </label>
                                                            <input type="text" id="edit_company_name"
                                                                name="company_name" class="modern-input"
                                                                placeholder="Masukkan nama perusahaan"
                                                                value="{{ $agent->company->name ?? '' }}" readonly>
                                                        </div>

                                                        <!-- Pilih Association -->
                                                        <div class="col-md-6">
                                                            <label class="modern-label">Nama Asosiasi</label>
                                                            <select id="edit_associationSelect" name="association_id"
                                                                class="modern-select">
                                                                <option value="">-- Pilih Asosiasi --</option>
                                                                @foreach ($associations as $association)
                                                                    <option value="{{ $association->id }}"
                                                                        {{ ($agent->association_id ?? '') == $association->id ? 'selected' : '' }}>
                                                                        {{ $association->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <!-- Alamat Perusahaan -->
                                                        <div class="col-12">
                                                            <label class="modern-label">
                                                                Alamat Perusahaan <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-geolocation input-icon-textarea">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <textarea id="edit_company_address" name="company_address" class="modern-textarea has-icon-textarea" rows="3"
                                                                    placeholder="Masukkan alamat lengkap perusahaan" required>{{ $agent->company->main_address ?? '' }}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- Alamat Office -->
                                                        <div class="col-12">
                                                            <label class="modern-label">
                                                                Alamat Cabang <span class="required">*</span>
                                                            </label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-geolocation input-icon-textarea">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <textarea id="edit_office_address" name="office_address" class="modern-textarea has-icon-textarea" rows="3"
                                                                    placeholder="Masukkan alamat lengkap kantor" required>{{ $office->address ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Informasi Lisensi -->
                                                <div class="form-section">
                                                    <div class="section-header">
                                                        <i class="ki-duotone ki-award fs-3 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                        <h6 class="section-title">Informasi Lisensi</h6>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="modern-label">Nomor Lisensi PPIU</label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-document input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="text" id="edit_ppiu_license_number"
                                                                    name="ppiu_license_number"
                                                                    class="modern-input has-icon"
                                                                    placeholder="Masukkan nomor lisensi PPIU"
                                                                    value="{{ $agent->ppiu_license_number ?? '' }}">
                                                            </div>
                                                            <small class="form-hint">Penyelenggara Perjalanan Ibadah
                                                                Umrah</small>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="modern-label">Nomor Lisensi PIHK</label>
                                                            <div class="input-with-icon">
                                                                <i class="ki-duotone ki-document input-icon">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <input type="text" id="edit_pihk_license_number"
                                                                    name="pihk_license_number"
                                                                    class="modern-input has-icon"
                                                                    placeholder="Masukkan nomor lisensi PIHK"
                                                                    value="{{ $agent->pihk_license_number ?? '' }}">
                                                            </div>
                                                            <small class="form-hint">Penyelenggara Ibadah Haji
                                                                Khusus</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Status Agen -->
                                                <div class="form-section">
                                                    <div class="section-header">
                                                        <i class="ki-duotone ki-status fs-3 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                        <h6 class="section-title">Status Agen</h6>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-md-12">
                                                            <label class="modern-label">
                                                                Status Aktif <span class="required">*</span>
                                                            </label>
                                                            <select name="is_active" id="edit_is_active"
                                                                class="modern-select" required>
                                                                <option value="">Pilih Status</option>
                                                                <option value="1"
                                                                    {{ ($agent->user->is_active ?? false) == 1 ? 'selected' : '' }}>
                                                                    Aktif</option>
                                                                <option value="0"
                                                                    {{ ($agent->user->is_active ?? false) == 0 ? 'selected' : '' }}>
                                                                    Tidak Aktif</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <!-- Footer -->
                                        <div class="modern-modal-footer">
                                            <button type="button" class="btn-modal-cancel" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross-circle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                Batal
                                            </button>
                                            <button type="submit" class="btn-modal-submit"
                                                form="updateAgentForm{{ $agent->id }}">
                                                <i class="ki-duotone ki-check-circle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                Update Data Agen
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal View Agent -->
                            <div class="modal fade" id="modalViewAgent{{ $agent->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content modern-modal">

                                        <!-- Header -->
                                        <div class="modern-modal-header">
                                            <div class="modal-header-content">
                                                <div class="modal-icon-wrapper">
                                                    <i class="ki-duotone ki-eye fs-2x text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div>
                                                    <h3 class="modal-title">Detail Data Agen</h3>
                                                    <p class="modal-subtitle">Informasi lengkap agen, perusahaan, dan
                                                        lisensi</p>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-modal-close" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                        </div>

                                        <!-- Body -->
                                        <div class="modern-modal-body">

                                            <!-- Informasi Pribadi -->
                                            <div class="form-section mb-3">
                                                <div class="section-header">
                                                    <i class="ki-duotone ki-profile-circle fs-3 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <h6 class="section-title">Informasi Pribadi</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <strong>Nama Lengkap:</strong> {{ $agent->people->fullname }}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Email:</strong> {{ $agent->user?->email ?? '-' }}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Jenis Kelamin:</strong>
                                                        {{ $agent->people->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Telepon:</strong> {{ $agent->people->phone }}
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Perusahaan & Office -->
                                            <div class="form-section mb-3">
                                                <div class="section-header">
                                                    <i class="ki-duotone ki-bank fs-3 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <h6 class="section-title">Informasi Perusahaan</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <strong>Perusahaan:</strong> {{ $agent->company->name ?? '-' }}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>Cabang:</strong> {{ $office->name ?? '-' }}
                                                    </div>
                                                    <div class="col-12">
                                                        <strong>Alamat Perusahaan:</strong>
                                                        {{ $agent->company->main_address ?? '-' }}
                                                    </div>
                                                    <div class="col-12">
                                                        <strong>Alamat Cabang:</strong>
                                                        {{ $office->address ?? '-' }}
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Lisensi & Status -->
                                            <div class="form-section mb-3">
                                                <div class="section-header">
                                                    <i class="ki-duotone ki-award fs-3 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <h6 class="section-title">Lisensi & Status</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <strong>PPIU:</strong> {{ $agent->ppiu_license_number ?? '-' }}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong>PIHK:</strong> {{ $agent->pihk_license_number ?? '-' }}
                                                    </div>
                                                    <div class="col-12">
                                                        <strong>Status Aktif:</strong>
                                                        {{ $agent->user?->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Footer -->
                                        <div class="modern-modal-footer">
                                            <button type="button" class="btn-modal-cancel" data-bs-dismiss="modal">
                                                <i class="ki-duotone ki-cross-circle fs-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                Tutup
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Modal Add Agent -->
                        <div class="modal fade" id="modalAddAgent" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content modern-modal">
                                    <!-- Header -->
                                    <div class="modern-modal-header">
                                        <div class="modal-header-content">
                                            <div class="modal-icon-wrapper"> <i
                                                    class="ki-duotone ki-briefcase fs-2x text-primary"> <span
                                                        class="path1"></span> <span class="path2"></span> </i> </div>
                                            <div>
                                                <h3 class="modal-title">Tambah Agen Baru</h3>
                                                <p class="modal-subtitle">Lengkapi informasi pribadi, akun pengguna, dan
                                                    data agen</p>
                                            </div>
                                        </div> <button type="button" class="btn-modal-close" data-bs-dismiss="modal"> <i
                                                class="ki-duotone ki-cross fs-2"> <span class="path1"></span> <span
                                                    class="path2"></span> </i> </button>
                                    </div> <!-- Body -->
                                    <div class="modern-modal-body">
                                        <form id="addAgentForm" method="POST" action="{{ route('agent.store') }}">
                                            @csrf <!-- Informasi Akun Pengguna -->
                                            <div class="form-section">
                                                <div class="section-header"> <i
                                                        class="ki-duotone ki-user-tick fs-3 text-primary"> <span
                                                            class="path1"></span> <span class="path2"></span> <span
                                                            class="path3"></span> </i>
                                                    <h6 class="section-title">Informasi Akun Pengguna</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6"> <label class="modern-label"> Username <span
                                                                class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-user input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                            </i> <input type="text" name="username"
                                                                class="modern-input has-icon"
                                                                placeholder="Masukkan username" required> </div>
                                                    </div>
                                                    <div class="col-md-6"> <label class="modern-label"> Email <span
                                                                class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-sms input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                            </i> <input type="email" name="email"
                                                                class="modern-input has-icon" placeholder="Masukkan email"
                                                                required> </div>
                                                    </div>
                                                    <div class="col-md-6"> <label class="modern-label"> Password <span
                                                                class="required">*</span> </label> <input type="text"
                                                            id="password" name="password" class="modern-input"
                                                            placeholder="Masukkan password" required minlength="8">
                                                        <small class="form-hint">Minimal 8 karakter</small>
                                                    </div>
                                                    <div class="col-md-6"> <label class="modern-label"> Konfirmasi
                                                            Password <span class="required">*</span> </label> <input
                                                            type="text" id="password_confirmation"
                                                            name="password_confirmation" class="modern-input"
                                                            placeholder="Konfirmasi password" required minlength="8">
                                                        <small class="form-hint">Harus sama dengan password</small>
                                                    </div>
                                                </div>
                                            </div> <!-- Informasi Pribadi (People) -->
                                            <div class="form-section">
                                                <div class="section-header"> <i
                                                        class="ki-duotone ki-profile-circle fs-3 text-primary"> <span
                                                            class="path1"></span> <span class="path2"></span> <span
                                                            class="path3"></span> </i>
                                                    <h6 class="section-title">Informasi Pribadi</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6"> <label class="modern-label"> Nama Lengkap <span
                                                                class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-badge input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                                <span class="path3"></span> <span class="path4"></span>
                                                                <span class="path5"></span> </i> <input type="text"
                                                                name="fullname" class="modern-input has-icon"
                                                                placeholder="Masukkan nama lengkap" required> </div>
                                                    </div>
                                                    <div class="col-md-3"> <label class="modern-label"> Jenis Kelamin
                                                            <span class="required">*</span> </label> <select
                                                            name="sex" class="modern-select" required>
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="L">Laki-laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select> </div>
                                                    <div class="col-md-3"> <label class="modern-label"> Nomor Telepon
                                                            <span class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-phone input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                            </i> <input type="tel" name="phone"
                                                                class="modern-input has-icon" placeholder="08xxxxxxxxxx"
                                                                required> </div>
                                                    </div>
                                                    <div class="col-md-6"> <label class="modern-label"> Tempat Lahir <span
                                                                class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-map input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                                <span class="path3"></span> </i> <input type="text"
                                                                name="pob" class="modern-input has-icon"
                                                                placeholder="Masukkan tempat lahir" required> </div>
                                                    </div>
                                                    <div class="col-md-6"> <label class="modern-label"> Tanggal Lahir
                                                            <span class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-calendar input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                            </i> <input type="date" name="bod"
                                                                class="modern-input has-icon" required> </div>
                                                    </div>
                                                    <div class="col-12"> <label class="modern-label"> Alamat Lengkap <span
                                                                class="required">*</span> </label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-geolocation input-icon-textarea">
                                                                <span class="path1"></span> <span class="path2"></span>
                                                            </i>
                                                            <textarea name="address" class="modern-textarea has-icon-textarea" rows="3"
                                                                placeholder="Masukkan alamat lengkap sesuai KTP" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Informasi Perusahaan -->
                                            <div class="form-section">
                                                <div class="section-header"> <i
                                                        class="ki-duotone ki-bank fs-3 text-primary"> <span
                                                            class="path1"></span> <span class="path2"></span> </i>
                                                    <h6 class="section-title">Informasi Perusahaan</h6>
                                                </div>
                                                <div class="row g-3"> <!-- Pilih Perusahaan -->
                                                    <div class="col-md-6"> <label class="modern-label">Pilih
                                                            Perusahaan</label> <select id="companySelect"
                                                            name="company_id" class="modern-select">
                                                            <option value="">-- Pilih Perusahaan --</option>
                                                            @foreach ($companies as $company)
                                                                <option value="{{ $company->id }}"
                                                                    data-name="{{ $company->name }}"
                                                                    data-address="{{ $company->main_address ?? '' }}"
                                                                    data-ppiu="{{ $company->ppiu_license_number ?? '' }}"
                                                                    data-pihk="{{ $company->pihk_license_number ?? '' }}">
                                                                    {{ $company->name }} </option>
                                                            @endforeach
                                                        </select> </div> <!-- Pilih Cabang / Office -->
                                                    <div class="col-md-6"> <label class="modern-label">Pilih
                                                            Cabang</label> <select id="officeSelect" name="office_id"
                                                            class="modern-select">
                                                            <option value="">-- Pilih Cabang --</option>
                                                            @foreach ($offices as $office)
                                                                <option value="{{ $office->id }}"
                                                                    data-company="{{ $office->company_id }}"
                                                                    data-address="{{ $office->address }}">
                                                                    {{ $office->name }} </option>
                                                            @endforeach
                                                        </select> </div> <!-- Nama Perusahaan -->
                                                    <div class="col-md-6"> <label class="modern-label">Nama Perusahaan
                                                            <span class="required">*</span></label> <input type="text"
                                                            id="company_name" name="company_name" class="modern-input"
                                                            placeholder="Masukkan nama perusahaan" required> </div>
                                                    <!-- Pilih Association (manual dropdown) -->
                                                    <div class="col-md-6"> <label class="modern-label">Nama
                                                            Asosiasi</label> <select id="associationSelect"
                                                            name="association_id" class="modern-select">
                                                            <option value="">-- Pilih Asosiasi --</option>
                                                            @foreach ($associations as $association)
                                                                <option value="{{ $association->id }}">
                                                                    {{ $association->name }}</option>
                                                            @endforeach
                                                        </select> </div> <!-- Alamat Perusahaan -->
                                                    <div class="col-12"> <label class="modern-label">Alamat Perusahaan
                                                            <span class="required">*</span></label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-geolocation input-icon-textarea">
                                                                <span class="path1"></span> <span class="path2"></span>
                                                            </i>
                                                            <textarea id="company_address" name="company_address" class="modern-textarea has-icon-textarea" rows="3"
                                                                placeholder="Masukkan alamat lengkap perusahaan" required></textarea>
                                                        </div>
                                                    </div> <!-- Alamat Office -->
                                                    <div class="col-12"> <label class="modern-label">Alamat Cabang <span
                                                                class="required">*</span></label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-geolocation input-icon-textarea">
                                                                <span class="path1"></span> <span class="path2"></span>
                                                            </i>
                                                            <textarea id="office_address" name="office_address" class="modern-textarea has-icon-textarea" rows="3"
                                                                placeholder="Masukkan alamat lengkap kantor" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Informasi Lisensi -->
                                            <div class="form-section">
                                                <div class="section-header"> <i
                                                        class="ki-duotone ki-award fs-3 text-primary"> <span
                                                            class="path1"></span> <span class="path2"></span> <span
                                                            class="path3"></span> </i>
                                                    <h6 class="section-title">Informasi Lisensi</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-6"> <label class="modern-label">Nomor Lisensi
                                                            PPIU</label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-document input-icon"> <span
                                                                    class="path1"></span> <span class="path2"></span>
                                                            </i> <input type="text" id="ppiu_license_number"
                                                                name="ppiu_license_number" class="modern-input has-icon"
                                                                placeholder="Masukkan nomor lisensi PPIU"> </div> <small
                                                            class="form-hint">Penyelenggara Perjalanan Ibadah Umrah</small>
                                                    </div>
                                                    <div class="col-md-6"> <label class="modern-label">Nomor Lisensi
                                                            PIHK</label>
                                                        <div class="input-with-icon"> <i
                                                                class="ki-duotone ki-document input-icon"> <span
                                                                    class="path1"></span> <span class2></span> </i> <input
                                                                type="text" id="pihk_license_number"
                                                                name="pihk_license_number" class="modern-input has-icon"
                                                                placeholder="Masukkan nomor lisensi PIHK"> </div> <small
                                                            class="form-hint">Penyelenggara Ibadah Haji Khusus</small>
                                                    </div>
                                                </div>
                                            </div> <!-- Status Agen -->
                                            <div class="form-section">
                                                <div class="section-header"> <i
                                                        class="ki-duotone ki-status fs-3 text-primary"> <span
                                                            class="path1"></span> <span class="path2"></span> <span
                                                            class="path3"></span> </i>
                                                    <h6 class="section-title">Status Agen</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-12"> <label class="modern-label"> Status Aktif
                                                            <span class="required">*</span> </label> <select
                                                            name="is_active" class="modern-select" required>
                                                            <option value="">Pilih Status</option>
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Tidak Aktif</option>
                                                        </select> </div>
                                                </div>
                                        </form>
                                    </div> <!-- Footer -->
                                    <div class="modern-modal-footer"> <button type="button" class="btn-modal-cancel"
                                            data-bs-dismiss="modal"> <i class="ki-duotone ki-cross-circle fs-3"> <span
                                                    class="path1"></span> <span class="path2"></span> </i> Batal
                                        </button> <button type="submit" class="btn-modal-submit" form="addAgentForm"> <i
                                                class="ki-duotone ki-check-circle fs-3"> <span class="path1"></span>
                                                <span class="path2"></span> </i> Simpan Data Agen </button> </div>
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
    @push('scripts')
        <script>
            // Password Match Validation
            document.addEventListener('DOMContentLoaded', function() {
                const passwordConfirmation = document.getElementById('password_confirmation');

                if (passwordConfirmation) {
                    passwordConfirmation.addEventListener('input', function() {
                        const password = document.getElementById('password').value;
                        const confirmation = this.value;

                        if (confirmation && password !== confirmation) {
                            this.setCustomValidity('Password tidak cocok');
                            this.style.borderColor = '#ef4444';
                        } else {
                            this.setCustomValidity('');
                            this.style.borderColor = '';
                        }
                    });
                }
            });

            // Form Submission Handler
            // Struktur Polymorphic: users -> people -> agents
            document.getElementById('addAgentForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // Validate password match
                const password = document.getElementById('password').value;
                const confirmation = document.getElementById('password_confirmation').value;

                if (password !== confirmation) {
                    alert('Password dan konfirmasi password tidak cocok!');
                    return;
                }

                // Validate password length
                if (password.length < 8) {
                    alert('Password minimal 8 karakter!');
                    return;
                }

                // Get form data
                const formData = new FormData(this);

                // Convert to object
                const data = Object.fromEntries(formData.entries());

                console.log('Agent Data:', data);

                // Data yang akan dikirim ke backend mencakup:
                // 1. Users table: username, email, password, is_active
                // 2. People table: fullname, sex, bod, pob, phone, address
                // 3. Agents table: company_name, ppiu_license_number, pihk_license_number, 
                //                  office_address, bank_name, bank_account_name, 
                //                  bank_account_number, association_name, status

                // Backend should handle polymorphic relationship creation
                /*
                fetch('/api/agents', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    console.log('Success:', result);
                    // Close modal and refresh table
                    bootstrap.Modal.getInstance(document.getElementById('modalAddAgent')).hide();
                    // Reload datatable or append new row
                    location.reload(); // or use DataTable API to reload
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menyimpan data');
                });
                */
            });
        </script>
    @endpush
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const companySelect = document.getElementById('companySelect');
        const officeSelect = document.getElementById('officeSelect');

        const companyNameInput = document.getElementById('company_name');
        const companyAddressInput = document.getElementById('company_address');
        const officeAddressInput = document.getElementById('office_address');

        // Pilih perusahaan
        companySelect.addEventListener('change', function() {
            const selected = this.options[this.selectedIndex];
            companyNameInput.value = selected.dataset.name || '';
            companyAddressInput.value = selected.dataset.address || '';
            document.getElementById('ppiu_license_number').value = selected.dataset.ppiu || '';
            document.getElementById('pihk_license_number').value = selected.dataset.pihk || '';

            // Reset cabang
            officeSelect.selectedIndex = 0;
            officeAddressInput.value = '';
        });

        // Pilih cabang
        officeSelect.addEventListener('change', function() {
            const selected = this.options[this.selectedIndex];
            officeAddressInput.value = selected.dataset.address || '';

            // Update perusahaan sesuai cabang
            const companyId = selected.dataset.company;
            if (companyId) {
                const companyOption = companySelect.querySelector(`option[value="${companyId}"]`);
                if (companyOption) {
                    companySelect.value = companyId;
                    companyNameInput.value = companyOption.dataset.name || '';
                    companyAddressInput.value = companyOption.dataset.address || '';
                    document.getElementById('ppiu_license_number').value = companyOption.dataset.ppiu ||
                        '';
                    document.getElementById('pihk_license_number').value = companyOption.dataset.pihk ||
                        '';
                }
            }
        });
    });
</script>
<script>
    document.addEventListener('show.bs.modal', function(event) {
        if (event.target.id === 'modalUpdateAgent') {

            let button = event.relatedTarget;
            let id = button.getAttribute('data-id');

            let form = document.getElementById('updateAgentForm');

            // ubah action sesuai id yang diklik
            form.action = `/agent/${id}`;
        }
    });
</script>

<script>
    // Function to print biodata
    function printBiodata() {
        window.print();
    }

    // Optional: Function to populate modal with agent data
    function viewAgentBiodata(agentData) {
        // Populate photo
        const avatar = document.getElementById('view_avatar');
        avatar.src = agentData.avatar ||
            `https://ui-avatars.com/api/?name=${encodeURIComponent(agentData.fullname)}&background=1a1a2e&color=fff&size=150`;

        // Populate header
        document.getElementById('view_fullname').textContent = agentData.fullname || '-';
        document.getElementById('view_role').textContent = agentData.role || 'Agent';
        document.getElementById('view_status').textContent = agentData.status || 'Active';

        // Populate Data Pribadi
        document.getElementById('view_fullname_detail').textContent = agentData.fullname || '-';
        document.getElementById('view_gender').textContent = agentData.gender || '-';
        document.getElementById('view_phone').textContent = agentData.phone || '-';
        document.getElementById('view_birth_place').textContent = agentData.birth_place || '-';
        document.getElementById('view_birth_date').textContent = agentData.birth_date || '-';
        document.getElementById('view_address').textContent = agentData.address || '-';

        // Populate Informasi Akun
        document.getElementById('view_username').textContent = agentData.username || '-';
        document.getElementById('view_email').textContent = agentData.email || '-';
        document.getElementById('view_account_status').textContent = agentData.account_status || '-';
        document.getElementById('view_last_login').textContent = agentData.last_login || '-';

        // Populate Informasi Perusahaan
        document.getElementById('view_company_name').textContent = agentData.company_name || '-';
        document.getElementById('view_office_name').textContent = agentData.office_name || '-';
        document.getElementById('view_company_address').textContent = agentData.company_address || '-';
        document.getElementById('view_office_address').textContent = agentData.office_address || '-';
        document.getElementById('view_association_name').textContent = agentData.association_name || '-';

        // Populate Informasi Lisensi
        document.getElementById('view_ppiu_license').textContent = agentData.ppiu_license || '-';
        document.getElementById('view_pihk_license').textContent = agentData.pihk_license || '-';

        // Populate Footer
        document.getElementById('view_created_at').textContent = agentData.created_at || '-';
        document.getElementById('view_updated_at').textContent = agentData.updated_at || '-';

        // Show modal
        const modal = new bootstrap.Modal(document.getElementById('modalViewAgent'));
        modal.show();
    }

    // Example usage:
    // viewAgentBiodata({
    //     fullname: "Ahmad Hidayat",
    //     role: "Agent PPIU",
    //     status: "Active",
    //     gender: "Laki-laki",
    //     phone: "+62 812-3456-7890",
    //     ...
    // });
</script>
<script>
    function confirmDelete(agentId, agentName) {
        // Create custom modal with illustration
        const modalHTML = `
            <div id="deleteModal" class="delete-modal-overlay">
                <div class="delete-modal-container">
                    <button class="modal-close-btn" onclick="closeDeleteModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    
                    <div class="modal-illustration">
                        <div class="illustration-bg">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <!-- Trash bin -->
                                <rect x="75" y="90" width="50" height="60" rx="5" fill="#EF4444" opacity="0.9"/>
                                <rect x="70" y="85" width="60" height="8" rx="3" fill="#DC2626"/>
                                <line x1="85" y1="100" x2="85" y2="135" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                <line x1="100" y1="100" x2="100" y2="135" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                <line x1="115" y1="100" x2="115" y2="135" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                
                                <!-- Person -->
                                <circle cx="140" cy="65" r="12" fill="#FCA5A5"/>
                                <rect x="130" y="77" width="20" height="35" rx="10" fill="#3B82F6"/>
                                <rect x="125" y="85" width="8" height="30" rx="4" fill="#FCA5A5"/>
                                <rect x="147" y="85" width="8" height="30" rx="4" fill="#FCA5A5"/>
                                
                                <!-- Documents floating -->
                                <rect x="45" y="50" width="20" height="25" rx="2" fill="#F3F4F6" opacity="0.8"/>
                                <rect x="155" y="45" width="20" height="25" rx="2" fill="#F3F4F6" opacity="0.8"/>
                                <rect x="50" y="120" width="15" height="20" rx="2" fill="#F3F4F6" opacity="0.6"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="modal-content">
                        <h3 class="modal-heading">Apakah Anda yakin ingin menghapus?</h3>
                        <p class="modal-agent-info">${agentName}</p>
                        <p class="modal-subtext">Data yang dihapus akan hilang secara permanen dari sistem</p>
                    </div>
                    
                    <div class="modal-actions">
                        <button class="btn-modal btn-cancel" onclick="closeDeleteModal()">Cancel</button>
                        <button class="btn-modal btn-delete" onclick="executeDelete(${agentId})">Delete</button>
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHTML);
        setTimeout(() => {
            document.getElementById('deleteModal').classList.add('show');
        }, 10);
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.remove('show');
        setTimeout(() => {
            modal.remove();
        }, 300);
    }

    function executeDelete(agentId) {
        const modal = document.getElementById('deleteModal');

        // Show loading state
        modal.querySelector('.delete-modal-container').innerHTML = `
            <div class="modal-loading">
                <div class="loading-animation">
                    <div class="loading-circle"></div>
                    <div class="loading-circle"></div>
                    <div class="loading-circle"></div>
                </div>
                <p class="loading-message">Menghapus data...</p>
            </div>
        `;

        fetch(`/agent/delete/${agentId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })

            .then(response => response.json())
            .then(data => {
                // Show success state
                modal.querySelector('.delete-modal-container').innerHTML = `
                    <div class="modal-success">
                        <div class="success-checkmark">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="45" fill="#10B981" opacity="0.1"/>
                                <circle cx="50" cy="50" r="35" fill="#10B981" opacity="0.2"/>
                                <path d="M30 50 L45 65 L70 35" stroke="#10B981" stroke-width="6" fill="none" 
                                      stroke-linecap="round" stroke-linejoin="round" class="checkmark-path"/>
                            </svg>
                        </div>
                        <h3 class="success-title">Berhasil Dihapus!</h3>
                        <p class="success-message">${data.message || 'Data agent berhasil dihapus dari sistem'}</p>
                    </div>
                `;

                setTimeout(() => {
                    closeDeleteModal();
                    location.reload();
                }, 2000);
            })
            .catch(error => {
                // Show error state
                modal.querySelector('.delete-modal-container').innerHTML = `
                    <div class="modal-error">
                        <div class="error-icon">
                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="45" fill="#EF4444" opacity="0.1"/>
                                <circle cx="50" cy="50" r="35" fill="#EF4444" opacity="0.2"/>
                                <path d="M35 35 L65 65 M65 35 L35 65" stroke="#EF4444" stroke-width="6" 
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3 class="error-title">Gagal Menghapus!</h3>
                        <p class="error-message">Terjadi kesalahan saat menghapus data. Silakan coba lagi.</p>
                        <button class="btn-modal btn-retry" onclick="closeDeleteModal()">Tutup</button>
                    </div>
                `;
            });
    }
</script>
