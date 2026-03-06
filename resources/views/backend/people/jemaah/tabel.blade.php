@extends('backend.master')

@section('title', 'Data Jemaah')

@section('content')

    {{-- Page Header --}}
    <div class="page-header">
        <div class="page-title">
            <h5><i class="dw dw-user mr-1"></i> Data Jemaah</h5>
        </div>
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Jemaah</li>
            </ol>
        </nav>
    </div>

    <div class="pd-ltr-20">

        {{-- Alert errors --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0 mt-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif

        {{-- Tabel Jemaah --}}
        <div class="card-box mb-30">
            <div class="pd-20 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-blue h4">Daftar Jemaah</h4>
                    <p class="mb-0 text-muted">Kelola data jemaah yang terdaftar di sistem</p>
                </div>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddJemaah">
                    <i class="dw dw-add"></i> Tambah Jemaah
                </button>
            </div>

            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Jemaah</th>
                            <th>No. Registrasi</th>
                            <th>Grup</th>
                            <th>Keberangkatan</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
                            <th class="datatable-nosort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jamaahs as $jamaah)
                            @php
                                $person     = $jamaah->people;
                                $fullname   = $person->fullname ?? '-';
                                $phone      = $person->phone ?? '-';
                                $reg_number = $jamaah->registration_number ?? '-';
                                $departure  = $jamaah->departure_date
                                    ? \Carbon\Carbon::parse($jamaah->departure_date)->format('d M Y')
                                    : '-';
                                $group_name = $jamaah->group->name ?? 'Tanpa Grup';

                                $status_map = [
                                    'active'               => ['label' => 'Aktif',              'badge' => 'success'],
                                    'pending'              => ['label' => 'Pending',             'badge' => 'warning'],
                                    'cancelled'            => ['label' => 'Batal',               'badge' => 'danger'],
                                    'done'                 => ['label' => 'Selesai',             'badge' => 'info'],
                                    'draft'                => ['label' => 'Draft',               'badge' => 'secondary'],
                                    'booked'               => ['label' => 'Booked',              'badge' => 'primary'],
                                    'paid'                 => ['label' => 'Paid',                'badge' => 'success'],
                                    'documents_verified'   => ['label' => 'Dok. Terverifikasi',  'badge' => 'info'],
                                    'ready'                => ['label' => 'Siap',                'badge' => 'success'],
                                    'departed'             => ['label' => 'Berangkat',           'badge' => 'dark'],
                                ];
                                $status_key   = strtolower($jamaah->status ?? 'pending');
                                $status_label = $status_map[$status_key]['label'] ?? ucfirst($status_key);
                                $status_badge = $status_map[$status_key]['badge'] ?? 'secondary';

                                $payments  = $jamaah->payments;
                                $total_paid = $payments->where('status', 'paid')->sum('amount');
                                $all_paid  = $payments->count() > 0 && $payments->every(fn($p) => $p->status === 'paid');
                                $has_paid  = $total_paid > 0;
                                $pay_label = $all_paid ? 'Lunas' : ($has_paid ? 'DP' : 'Belum Bayar');
                                $pay_badge = $all_paid ? 'success' : ($has_paid ? 'warning' : 'danger');

                                $colors    = ['0D6EFD', '6610F2', '6F42C1', 'D63384', 'DC3545', 'FD7E14', '198754'];
                                $avatar_bg = $colors[crc32($fullname) % count($colors)];
                            @endphp

                            <tr>
                                <td class="table-plus">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2"
                                            src="https://ui-avatars.com/api/?name={{ urlencode($fullname) }}&background={{ $avatar_bg }}&color=fff"
                                            alt="{{ $fullname }}" width="36" height="36">
                                        <div>
                                            <div class="font-weight-bold text-dark">{{ $fullname }}</div>
                                            <small class="text-muted"><i class="dw dw-phone" style="font-size:.75rem;"></i> {{ $phone }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="font-weight-bold">{{ $reg_number }}</td>
                                <td>{{ $group_name }}</td>
                                <td class="text-muted">{{ $departure }}</td>
                                <td><span class="badge badge-{{ $pay_badge }}">{{ $pay_label }}</span></td>
                                <td><span class="badge badge-{{ $status_badge }}">{{ $status_label }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#modalViewJamaah{{ $jamaah->id }}">
                                                <i class="dw dw-eye"></i> Lihat
                                            </a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#modalUpdateJamaah{{ $jamaah->id }}">
                                                <i class="dw dw-edit2"></i> Edit
                                            </a>
                                            <a class="dropdown-item text-danger" href="#"
                                                onclick="confirmDelete({{ $jamaah->id }}, '{{ addslashes($fullname) }}')">
                                                <i class="dw dw-delete-3"></i> Hapus
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- Modal Edit --}}
                            <div class="modal fade" id="modalUpdateJamaah{{ $jamaah->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3"><i class="dw dw-edit2 text-warning" style="font-size:1.8rem;"></i></span>
                                                <div>
                                                    <h5 class="modal-title mb-0">Edit Data Jemaah</h5>
                                                    <small class="text-muted">{{ $fullname }}</small>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body" style="max-height:75vh;overflow-y:auto;">
                                            <form id="updateJamaahForm{{ $jamaah->id }}" method="POST"
                                                action="{{ route('jemaah.update', $jamaah->id) }}">
                                                @csrf
                                                @method('PUT')

                                                {{-- Akun --}}
                                                <div class="card-box pd-20 mb-20">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-user1 mr-1"></i> Informasi Akun Pengguna</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                                <input type="text" name="username" class="form-control"
                                                                    value="{{ $jamaah->user->username ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $jamaah->user->email ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Password Baru</label>
                                                                <input type="password" name="password" class="form-control"
                                                                    placeholder="Kosongkan jika tidak diubah" minlength="8">
                                                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Konfirmasi Password</label>
                                                                <input type="password" name="password_confirmation" class="form-control"
                                                                    placeholder="Konfirmasi password baru" minlength="8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Pribadi --}}
                                                <div class="card-box pd-20 mb-20">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-user mr-1"></i> Informasi Pribadi</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                                                <input type="text" name="fullname" class="form-control"
                                                                    value="{{ $jamaah->people->fullname ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                                                <select name="gender" class="form-control" required>
                                                                    <option value="">Pilih</option>
                                                                    <option value="L" {{ ($jamaah->people->gender ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                                    <option value="P" {{ ($jamaah->people->gender ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                                                <input type="tel" name="phone" class="form-control"
                                                                    placeholder="08xxxxxxxxxx"
                                                                    value="{{ $jamaah->people->phone ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                                                <input type="text" name="birth_place" class="form-control"
                                                                    value="{{ $jamaah->people->birth_place ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                                                <input type="date" name="birth_date" class="form-control"
                                                                    value="{{ $jamaah->people->birth_date ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                                                                <textarea name="address" class="form-control" rows="3" required>{{ $jamaah->people->address ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Data Booking --}}
                                                <div class="card-box pd-20 mb-0">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-airplane mr-1"></i> Data Booking</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Tanggal Keberangkatan <span class="text-danger">*</span></label>
                                                                <input type="date" name="departure_date" class="form-control"
                                                                    value="{{ $jamaah->departure_date ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Status <span class="text-danger">*</span></label>
                                                                <select name="status" class="form-control" required>
                                                                    <option value="draft"              {{ ($jamaah->status ?? '') == 'draft'              ? 'selected' : '' }}>Draft</option>
                                                                    <option value="booked"             {{ ($jamaah->status ?? '') == 'booked'             ? 'selected' : '' }}>Booked</option>
                                                                    <option value="paid"               {{ ($jamaah->status ?? '') == 'paid'               ? 'selected' : '' }}>Paid</option>
                                                                    <option value="documents_verified" {{ ($jamaah->status ?? '') == 'documents_verified' ? 'selected' : '' }}>Documents Verified</option>
                                                                    <option value="ready"              {{ ($jamaah->status ?? '') == 'ready'              ? 'selected' : '' }}>Ready</option>
                                                                    <option value="departed"           {{ ($jamaah->status ?? '') == 'departed'           ? 'selected' : '' }}>Departed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
                                                <i class="dw dw-cancel mr-1"></i> Batal
                                            </button>
                                            <button type="submit" class="btn btn-primary btn-sm" form="updateJamaahForm{{ $jamaah->id }}">
                                                <i class="dw dw-checked mr-1"></i> Simpan Perubahan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Lihat --}}
                            <div class="modal fade" id="modalViewJamaah{{ $jamaah->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3"><i class="dw dw-eye text-primary" style="font-size:1.8rem;"></i></span>
                                                <div>
                                                    <h5 class="modal-title mb-0">Detail Jemaah</h5>
                                                    <small class="text-muted">{{ $fullname }}</small>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body" style="max-height:70vh;overflow-y:auto;">
                                            <div class="card-box pd-20 mb-20">
                                                <h6 class="text-blue mb-15"><i class="dw dw-user mr-1"></i> Informasi Pribadi</h6>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2"><strong>Nama Lengkap:</strong><br>{{ $jamaah->people->fullname ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Email:</strong><br>{{ $jamaah->user?->email ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Jenis Kelamin:</strong><br>{{ ($jamaah->people->gender ?? '') == 'L' ? 'Laki-laki' : 'Perempuan' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Telepon:</strong><br>{{ $jamaah->people->phone ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Tempat Lahir:</strong><br>{{ $jamaah->people->birth_place ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Tanggal Lahir:</strong><br>{{ $jamaah->people->birth_date ?? '-' }}</div>
                                                    <div class="col-12 mb-2"><strong>Alamat:</strong><br>{{ $jamaah->people->address ?? '-' }}</div>
                                                </div>
                                            </div>
                                            <div class="card-box pd-20 mb-0">
                                                <h6 class="text-blue mb-15"><i class="dw dw-airplane mr-1"></i> Data Booking</h6>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2"><strong>No. Registrasi:</strong><br>{{ $jamaah->registration_number ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Grup:</strong><br>{{ $jamaah->group->name ?? 'Tanpa Grup' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Keberangkatan:</strong><br>{{ $departure }}</div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Status:</strong><br>
                                                        <span class="badge badge-{{ $status_badge }}">{{ $status_label }}</span>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Pembayaran:</strong><br>
                                                        <span class="badge badge-{{ $pay_badge }}">{{ $pay_label }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
                                                <i class="dw dw-cancel mr-1"></i> Tutup
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        <tr style="display:none;"></tr>
                    </tbody>
                </table>

                @if(isset($jamaahs) && method_exists($jamaahs, 'hasPages') && $jamaahs->hasPages())
                    <div class="pd-20 d-flex justify-content-between align-items-center">
                        <div class="text-muted small">
                            Menampilkan <b>{{ $jamaahs->firstItem() }}</b> - <b>{{ $jamaahs->lastItem() }}</b>
                            dari <b>{{ $jamaahs->total() }}</b> data
                        </div>
                        {{ $jamaahs->links() }}
                    </div>
                @endif
            </div>
        </div>

        {{-- Modal Tambah Jemaah --}}
        <div class="modal fade" id="modalAddJemaah" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex align-items-center">
                            <span class="mr-3"><i class="dw dw-user text-primary" style="font-size:1.8rem;"></i></span>
                            <div>
                                <h5 class="modal-title mb-0">Tambah Jemaah Baru</h5>
                                <small class="text-muted">Lengkapi informasi pribadi, akun pengguna, dan data booking jemaah</small>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" style="max-height:75vh;overflow-y:auto;">
                        <form id="addJemaahForm" method="POST" action="{{ route('jemaah.store') }}">
                            @csrf

                            {{-- Akun --}}
                            <div class="card-box pd-20 mb-20">
                                <h6 class="text-blue mb-15"><i class="dw dw-user1 mr-1"></i> Informasi Akun Pengguna</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan password" required minlength="8">
                                            <small class="form-text text-muted">Minimal 8 karakter</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Konfirmasi password" required minlength="8">
                                            <small class="form-text text-muted">Harus sama dengan password</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Pribadi --}}
                            <div class="card-box pd-20 mb-20">
                                <h6 class="text-blue mb-15"><i class="dw dw-user mr-1"></i> Informasi Pribadi</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Masukkan nama lengkap" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                            <select name="gender" class="form-control" required>
                                                <option value="">Pilih</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                            <input type="tel" name="phone" class="form-control" placeholder="08xxxxxxxxxx" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                            <input type="text" name="birth_place" class="form-control" placeholder="Masukkan tempat lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input type="date" name="birth_date" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                                            <textarea name="address" class="form-control" rows="3"
                                                placeholder="Masukkan alamat lengkap sesuai KTP" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Data Booking --}}
                            <div class="card-box pd-20 mb-0">
                                <h6 class="text-blue mb-15"><i class="dw dw-airplane mr-1"></i> Data Booking</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Tipe Paket <span class="text-danger">*</span></label>
                                            <select name="package_type" id="packageType" class="form-control" required>
                                                <option value="">-- Pilih Tipe Paket --</option>
                                                @foreach ($package_types as $type)
                                                    <option value="{{ strtolower($type) }}">{{ ucfirst($type) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Paket <span class="text-danger">*</span></label>
                                            <select name="package_id" id="packageSelect" class="form-control" required disabled>
                                                <option value="">-- Pilih Tipe Dulu --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Grup</label>
                                            <select name="group_id" id="groupSelect" class="form-control" required disabled>
                                                <option value="">-- Pilih Paket Dulu --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Tanggal Keberangkatan <span class="text-danger">*</span></label>
                                            <input type="date" name="departure_date" id="departureDate" class="form-control" required>
                                            <small class="form-text text-muted">Otomatis terisi saat memilih paket</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control" required>
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
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
                            <i class="dw dw-cancel mr-1"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm" form="addJemaahForm">
                            <i class="dw dw-checked mr-1"></i> Simpan Data Jemaah
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>{{-- pd-ltr-20 --}}

@push('scripts')
<script>
    // Data dari Laravel
    const packagesData = @json($packages);
    const groupsData   = @json($groups);

    const packageType  = document.getElementById('packageType');
    const packageSelect = document.getElementById('packageSelect');
    const groupSelect  = document.getElementById('groupSelect');
    const departureDate = document.getElementById('departureDate');

    // Pilih Tipe Paket
    packageType.addEventListener('change', function() {
        const selectedType = this.value;

        packageSelect.innerHTML = '<option value="">-- Pilih Paket --</option>';
        packageSelect.disabled  = true;
        groupSelect.innerHTML   = '<option value="">-- Pilih Paket Dulu --</option>';
        groupSelect.disabled    = true;
        departureDate.value     = '';

        if (!selectedType) return;

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

    // Pilih Paket
    packageSelect.addEventListener('change', function() {
        const selectedId = this.options[this.selectedIndex].value;

        groupSelect.innerHTML = '<option value="">-- Pilih Paket Dulu --</option>';
        groupSelect.disabled  = true;
        departureDate.value   = '';

        if (!selectedId) return;

        const selectedPackage = packagesData.find(p => p.id == selectedId);
        if (!selectedPackage) return;

        const relatedGroups = groupsData.filter(g => g.package_id == selectedPackage.id);

        if (relatedGroups.length === 0) {
            groupSelect.innerHTML = '<option value="">Tidak ada grup tersedia</option>';
        } else {
            groupSelect.innerHTML = '<option value="">-- Pilih Grup --</option>';
            relatedGroups.forEach(g => {
                const option = document.createElement('option');
                option.value = g.id;
                option.textContent = g.name;
                groupSelect.appendChild(option);
            });
        }

        groupSelect.disabled    = false;
        departureDate.value     = selectedPackage.departure_date;
    });
</script>
@endpush

<script>
    function confirmDelete(jemaahId, jemaahName) {
        const modalHTML = `
            <div id="deleteModal" class="modal fade show" style="display:block;background:rgba(0,0,0,0.5);" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content text-center pd-20">
                        <div style="font-size:3rem;color:#EF4444;"><i class="dw dw-delete-3"></i></div>
                        <h5 class="mt-2">Hapus Data?</h5>
                        <p class="text-muted font-weight-bold">${jemaahName}</p>
                        <p class="text-muted small">Data yang dihapus tidak dapat dikembalikan.</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-default btn-sm mr-2" onclick="closeDeleteModal()">Batal</button>
                            <button class="btn btn-danger btn-sm" onclick="executeDelete(${jemaahId})">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>`;
        document.body.insertAdjacentHTML('beforeend', modalHTML);
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        if (modal) modal.remove();
    }

    function executeDelete(jemaahId) {
        document.getElementById('deleteModal').querySelector('.modal-content').innerHTML = `
            <div class="text-center pd-20">
                <div class="spinner-border text-primary" role="status"></div>
                <p class="mt-2 text-muted">Menghapus data...</p>
            </div>`;

        fetch(`/jemaah/delete/${jemaahId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('deleteModal').querySelector('.modal-content').innerHTML = `
                <div class="text-center pd-20">
                    <div style="font-size:3rem;color:#10B981;"><i class="dw dw-checked"></i></div>
                    <h5 class="mt-2 text-success">Berhasil Dihapus!</h5>
                    <p class="text-muted">${data.message || 'Data jemaah berhasil dihapus.'}</p>
                </div>`;
            setTimeout(() => { closeDeleteModal(); location.reload(); }, 1500);
        })
        .catch(() => {
            document.getElementById('deleteModal').querySelector('.modal-content').innerHTML = `
                <div class="text-center pd-20">
                    <div style="font-size:3rem;color:#EF4444;"><i class="dw dw-cancel"></i></div>
                    <h5 class="mt-2 text-danger">Gagal Menghapus!</h5>
                    <p class="text-muted">Terjadi kesalahan. Silakan coba lagi.</p>
                    <button class="btn btn-default btn-sm mt-2" onclick="closeDeleteModal()">Tutup</button>
                </div>`;
        });
    }
</script>

@endsection