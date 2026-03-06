@extends('backend.master')

@section('title', 'Data Agent')

@section('content')

    {{-- Page Header --}}
    <div class="page-header">
        <div class="page-title">
            <h5><i class="dw dw-user mr-1"></i> Data Agent</h5>
        </div>
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Agent</li>
            </ol>
        </nav>
    </div>

    <div class="pd-ltr-20">

        {{-- Tabel --}}
        <div class="card-box mb-30">
            <div class="pd-20 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-blue h4">Daftar Agent</h4>
                    <p class="mb-0 text-muted">Kelola data agent yang terdaftar di sistem</p>
                </div>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddAgent">
                    <i class="dw dw-add"></i> Tambah Agent
                </button>
            </div>

            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Active</th>
                            <th class="datatable-nosort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agents as $agent)
                            @php
                                $person = $agent->people;
                                $user   = $agent->user ?? null;
                                $fullname = $person->fullname ?? '-';
                                $username = $user->username ?? '-';
                                $email    = $user->email ?? '-';
                                $role_name   = $user && $user->roles->count() ? strtolower($user->roles->first()->name) : 'agent';
                                $role        = ucfirst($role_name);
                                $role_colors = ['admin' => 'danger', 'super admin' => 'dark', 'agent' => 'warning'];
                                $role_badge  = $role_colors[$role_name] ?? 'secondary';
                                $is_active    = $user && $user->is_active == 1;
                                $status_text  = $is_active ? 'Active' : 'Inactive';
                                $status_badge = $is_active ? 'success' : 'danger';
                                $active = $user && $user->last_login_at
                                    ? \Carbon\Carbon::parse($user->last_login_at)->format('d M Y H:i')
                                    : 'Never Login';
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
                                            <div class="font-weight-bold text-dark">{{ $username }}</div>
                                            <small class="text-muted">{{ $fullname }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $email }}</td>
                                <td><span class="badge badge-{{ $role_badge }}">{{ $role }}</span></td>
                                <td><span class="badge badge-{{ $status_badge }}">{{ $status_text }}</span></td>
                                <td class="text-muted">{{ $active }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#modalViewAgent{{ $agent->id }}">
                                                <i class="dw dw-eye"></i> Lihat
                                            </a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#modalUpdateAgent{{ $agent->id }}">
                                                <i class="dw dw-edit2"></i> Edit
                                            </a>
                                            <a class="dropdown-item text-danger" href="#"
                                                onclick="confirmDelete({{ $agent->id }}, '{{ addslashes($agent->people->fullname) }}')">
                                                <i class="dw dw-delete-3"></i> Hapus
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- Modal Edit --}}
                            <div class="modal fade" id="modalUpdateAgent{{ $agent->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3"><i class="dw dw-edit2 text-warning" style="font-size:1.8rem;"></i></span>
                                                <div>
                                                    <h5 class="modal-title mb-0">Edit Data Agen</h5>
                                                    <small class="text-muted">{{ $fullname }}</small>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body" style="max-height:75vh;overflow-y:auto;">
                                            <form id="updateAgentForm{{ $agent->id }}" method="POST"
                                                action="{{ route('agent.update', $agent->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="agent_id"  value="{{ $agent->id ?? '' }}">
                                                <input type="hidden" name="user_id"   value="{{ $agent->user->id ?? '' }}">
                                                <input type="hidden" name="people_id" value="{{ $agent->people->id ?? '' }}">

                                                <div class="card-box pd-20 mb-20">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-user1 mr-1"></i> Informasi Akun Pengguna</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                                <input type="text" name="username" class="form-control"
                                                                    value="{{ $agent->user->username ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                                <input type="email" name="email" class="form-control"
                                                                    value="{{ $agent->user->email ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Password Baru</label>
                                                                <input type="password" name="password" class="form-control"
                                                                    placeholder="Kosongkan jika tidak diubah" minlength="8">
                                                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Konfirmasi Password Baru</label>
                                                                <input type="password" name="password_confirmation" class="form-control"
                                                                    placeholder="Konfirmasi password baru" minlength="8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-box pd-20 mb-20">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-user mr-1"></i> Informasi Pribadi</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                                                <input type="text" name="fullname" class="form-control"
                                                                    value="{{ $agent->people->fullname ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                                                <select name="sex" class="form-control">
                                                                    <option value="">Pilih</option>
                                                                    <option value="L" {{ ($agent->people->gender ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                                    <option value="P" {{ ($agent->people->gender ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                                                <input type="tel" name="phone" class="form-control"
                                                                    placeholder="08xxxxxxxxxx"
                                                                    value="{{ $agent->people->phone ?? '' }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                                                <input type="text" name="pob" class="form-control"
                                                                    value="{{ $agent->people->birth_place ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                                                <input type="date" name="bod" class="form-control"
                                                                    value="{{ $agent->people->birth_date ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                                                                <textarea name="address" class="form-control" rows="3" required>{{ $agent->people->address ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-box pd-20 mb-20">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-money-2 mr-1"></i> Informasi Perusahaan</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Pilih Perusahaan</label>
                                                                <select id="edit_companySelect_{{ $agent->id }}" name="company_id" class="form-control">
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
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Pilih Cabang</label>
                                                                <select id="edit_officeSelect_{{ $agent->id }}" name="office_id" class="form-control">
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
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                                                <input type="text" name="company_name" class="form-control"
                                                                    value="{{ $agent->company->name ?? '' }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Asosiasi</label>
                                                                <select name="association_id" class="form-control">
                                                                    <option value="">-- Pilih Asosiasi --</option>
                                                                    @foreach ($associations as $association)
                                                                        <option value="{{ $association->id }}"
                                                                            {{ ($agent->association_id ?? '') == $association->id ? 'selected' : '' }}>
                                                                            {{ $association->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Alamat Perusahaan <span class="text-danger">*</span></label>
                                                                <textarea name="company_address" class="form-control" rows="3" required>{{ $agent->company->main_address ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Alamat Cabang <span class="text-danger">*</span></label>
                                                                <textarea name="office_address" class="form-control" rows="3" required>{{ $office->address ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-box pd-20 mb-20">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-medal mr-1"></i> Informasi Lisensi</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nomor Lisensi PPIU</label>
                                                                <input type="text" name="ppiu_license_number" class="form-control"
                                                                    placeholder="Masukkan nomor lisensi PPIU"
                                                                    value="{{ $agent->ppiu_license_number ?? '' }}">
                                                                <small class="form-text text-muted">Penyelenggara Perjalanan Ibadah Umrah</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nomor Lisensi PIHK</label>
                                                                <input type="text" name="pihk_license_number" class="form-control"
                                                                    placeholder="Masukkan nomor lisensi PIHK"
                                                                    value="{{ $agent->pihk_license_number ?? '' }}">
                                                                <small class="form-text text-muted">Penyelenggara Ibadah Haji Khusus</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-box pd-20 mb-0">
                                                    <h6 class="text-blue mb-15"><i class="dw dw-bar-chart mr-1"></i> Status Agen</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Status Aktif <span class="text-danger">*</span></label>
                                                                <select name="is_active" class="form-control" required>
                                                                    <option value="">Pilih Status</option>
                                                                    <option value="1" {{ ($agent->user->is_active ?? '') == 1 ? 'selected' : '' }}>Aktif</option>
                                                                    <option value="0" {{ ($agent->user->is_active ?? '') == 0 ? 'selected' : '' }}>Tidak Aktif</option>
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
                                            <button type="submit" class="btn btn-primary btn-sm" form="updateAgentForm{{ $agent->id }}">
                                                <i class="dw dw-checked mr-1"></i> Simpan Perubahan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Lihat --}}
                            <div class="modal fade" id="modalViewAgent{{ $agent->id }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3"><i class="dw dw-eye text-primary" style="font-size:1.8rem;"></i></span>
                                                <div>
                                                    <h5 class="modal-title mb-0">Detail Agen</h5>
                                                    <small class="text-muted">{{ $agent->people->fullname ?? '-' }}</small>
                                                </div>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body" style="max-height:70vh;overflow-y:auto;">
                                            <div class="card-box pd-20 mb-20">
                                                <h6 class="text-blue mb-15"><i class="dw dw-user mr-1"></i> Informasi Pribadi</h6>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2"><strong>Nama Lengkap:</strong><br>{{ $agent->people->fullname ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Email:</strong><br>{{ $agent->user?->email ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Jenis Kelamin:</strong><br>{{ ($agent->people->gender ?? '') == 'L' ? 'Laki-laki' : 'Perempuan' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Telepon:</strong><br>{{ $agent->people->phone ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Tempat Lahir:</strong><br>{{ $agent->people->birth_place ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Tanggal Lahir:</strong><br>{{ $agent->people->birth_date ?? '-' }}</div>
                                                    <div class="col-12 mb-2"><strong>Alamat:</strong><br>{{ $agent->people->address ?? '-' }}</div>
                                                </div>
                                            </div>
                                            <div class="card-box pd-20 mb-20">
                                                <h6 class="text-blue mb-15"><i class="dw dw-money-2 mr-1"></i> Informasi Perusahaan</h6>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2"><strong>Perusahaan:</strong><br>{{ $agent->company->name ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>Cabang:</strong><br>{{ $office->name ?? '-' }}</div>
                                                    <div class="col-12 mb-2"><strong>Alamat Perusahaan:</strong><br>{{ $agent->company->main_address ?? '-' }}</div>
                                                </div>
                                            </div>
                                            <div class="card-box pd-20 mb-0">
                                                <h6 class="text-blue mb-15"><i class="dw dw-medal mr-1"></i> Lisensi & Status</h6>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2"><strong>PPIU:</strong><br>{{ $agent->ppiu_license_number ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2"><strong>PIHK:</strong><br>{{ $agent->pihk_license_number ?? '-' }}</div>
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Status:</strong><br>
                                                        <span class="badge badge-{{ $agent->user?->is_active ? 'success' : 'danger' }}">
                                                            {{ $agent->user?->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                                        </span>
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

                @if(isset($agents) && method_exists($agents, 'hasPages') && $agents->hasPages())
                    <div class="pd-20 d-flex justify-content-between align-items-center">
                        <div class="text-muted small">
                            Menampilkan <b>{{ $agents->firstItem() }}</b> - <b>{{ $agents->lastItem() }}</b>
                            dari <b>{{ $agents->total() }}</b> data
                        </div>
                        {{ $agents->links() }}
                    </div>
                @endif
            </div>
        </div>

        {{-- Modal Tambah Agent --}}
        <div class="modal fade" id="modalAddAgent" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex align-items-center">
                            <span class="mr-3"><i class="dw dw-box text-primary" style="font-size:1.8rem;"></i></span>
                            <div>
                                <h5 class="modal-title mb-0">Tambah Agen Baru</h5>
                                <small class="text-muted">Lengkapi informasi pribadi, akun pengguna, dan data agen</small>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" style="max-height:75vh;overflow-y:auto;">
                        <form id="addAgentForm" method="POST" action="{{ route('agent.store') }}">
                            @csrf

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
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="Masukkan password" required minlength="8">
                                            <small class="form-text text-muted">Minimal 8 karakter</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                                placeholder="Konfirmasi password" required minlength="8">
                                            <small class="form-text text-muted">Harus sama dengan password</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                            <select name="sex" class="form-control" required>
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
                                            <input type="text" name="pob" class="form-control" placeholder="Masukkan tempat lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input type="date" name="bod" class="form-control" required>
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

                            <div class="card-box pd-20 mb-20">
                                <h6 class="text-blue mb-15"><i class="dw dw-money-2 mr-1"></i> Informasi Perusahaan</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Pilih Perusahaan</label>
                                            <select id="companySelect" name="company_id" class="form-control">
                                                <option value="">-- Pilih Perusahaan --</option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}"
                                                        data-name="{{ $company->name }}"
                                                        data-address="{{ $company->main_address ?? '' }}"
                                                        data-ppiu="{{ $company->ppiu_license_number ?? '' }}"
                                                        data-pihk="{{ $company->pihk_license_number ?? '' }}">
                                                        {{ $company->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Pilih Cabang</label>
                                            <select id="officeSelect" name="office_id" class="form-control">
                                                <option value="">-- Pilih Cabang --</option>
                                                @foreach ($offices as $office)
                                                    <option value="{{ $office->id }}"
                                                        data-company="{{ $office->company_id }}"
                                                        data-address="{{ $office->address }}">
                                                        {{ $office->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                            <input type="text" id="company_name" name="company_name" class="form-control"
                                                placeholder="Otomatis dari pilihan perusahaan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Nama Asosiasi</label>
                                            <select id="associationSelect" name="association_id" class="form-control">
                                                <option value="">-- Pilih Asosiasi --</option>
                                                @foreach ($associations as $association)
                                                    <option value="{{ $association->id }}">{{ $association->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Alamat Perusahaan <span class="text-danger">*</span></label>
                                            <textarea id="company_address" name="company_address" class="form-control" rows="3"
                                                placeholder="Otomatis dari pilihan perusahaan" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Alamat Cabang <span class="text-danger">*</span></label>
                                            <textarea id="office_address" name="office_address" class="form-control" rows="3"
                                                placeholder="Otomatis dari pilihan cabang" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-box pd-20 mb-20">
                                <h6 class="text-blue mb-15"><i class="dw dw-medal mr-1"></i> Informasi Lisensi</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Nomor Lisensi PPIU</label>
                                            <input type="text" id="ppiu_license_number" name="ppiu_license_number" class="form-control"
                                                placeholder="Masukkan nomor lisensi PPIU">
                                            <small class="form-text text-muted">Penyelenggara Perjalanan Ibadah Umrah</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Nomor Lisensi PIHK</label>
                                            <input type="text" id="pihk_license_number" name="pihk_license_number" class="form-control"
                                                placeholder="Masukkan nomor lisensi PIHK">
                                            <small class="form-text text-muted">Penyelenggara Ibadah Haji Khusus</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-box pd-20 mb-0">
                                <h6 class="text-blue mb-15"><i class="dw dw-bar-chart mr-1"></i> Status Agen</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label">Status Aktif <span class="text-danger">*</span></label>
                                            <select name="is_active" class="form-control" required>
                                                <option value="">Pilih Status</option>
                                                <option value="1">Aktif</option>
                                                <option value="0">Tidak Aktif</option>
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
                        <button type="submit" class="btn btn-primary btn-sm" form="addAgentForm">
                            <i class="dw dw-checked mr-1"></i> Simpan Data Agen
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>{{-- pd-ltr-20 --}}

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validasi password
        const passwordConfirmation = document.getElementById('password_confirmation');
        if (passwordConfirmation) {
            passwordConfirmation.addEventListener('input', function() {
                const password = document.getElementById('password').value;
                if (this.value && password !== this.value) {
                    this.setCustomValidity('Password tidak cocok');
                    this.style.borderColor = '#ef4444';
                } else {
                    this.setCustomValidity('');
                    this.style.borderColor = '';
                }
            });
        }

        // Auto-fill dari pilihan perusahaan
        const companySelect       = document.getElementById('companySelect');
        const officeSelect        = document.getElementById('officeSelect');
        const companyNameInput    = document.getElementById('company_name');
        const companyAddressInput = document.getElementById('company_address');
        const officeAddressInput  = document.getElementById('office_address');

        if (companySelect) {
            companySelect.addEventListener('change', function() {
                const selected = this.options[this.selectedIndex];
                companyNameInput.value    = selected.dataset.name    || '';
                companyAddressInput.value = selected.dataset.address || '';
                document.getElementById('ppiu_license_number').value = selected.dataset.ppiu || '';
                document.getElementById('pihk_license_number').value = selected.dataset.pihk || '';
                officeSelect.selectedIndex = 0;
                officeAddressInput.value = '';
            });
        }

        if (officeSelect) {
            officeSelect.addEventListener('change', function() {
                const selected  = this.options[this.selectedIndex];
                officeAddressInput.value = selected.dataset.address || '';
                const companyId = selected.dataset.company;
                if (companyId) {
                    const opt = companySelect.querySelector(`option[value="${companyId}"]`);
                    if (opt) {
                        companySelect.value       = companyId;
                        companyNameInput.value    = opt.dataset.name    || '';
                        companyAddressInput.value = opt.dataset.address || '';
                        document.getElementById('ppiu_license_number').value = opt.dataset.ppiu || '';
                        document.getElementById('pihk_license_number').value = opt.dataset.pihk || '';
                    }
                }
            });
        }
    });
</script>
@endpush

<script>
    function confirmDelete(agentId, agentName) {
        const modalHTML = `
            <div id="deleteModal" class="modal fade show" style="display:block;background:rgba(0,0,0,0.5);" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content text-center pd-20">
                        <div style="font-size:3rem;color:#EF4444;"><i class="dw dw-delete-3"></i></div>
                        <h5 class="mt-2">Hapus Data?</h5>
                        <p class="text-muted font-weight-bold">${agentName}</p>
                        <p class="text-muted small">Data yang dihapus tidak dapat dikembalikan.</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-default btn-sm mr-2" onclick="closeDeleteModal()">Batal</button>
                            <button class="btn btn-danger btn-sm" onclick="executeDelete(${agentId})">Hapus</button>
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

    function executeDelete(agentId) {
        document.getElementById('deleteModal').querySelector('.modal-content').innerHTML = `
            <div class="text-center pd-20">
                <div class="spinner-border text-primary" role="status"></div>
                <p class="mt-2 text-muted">Menghapus data...</p>
            </div>`;

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
            document.getElementById('deleteModal').querySelector('.modal-content').innerHTML = `
                <div class="text-center pd-20">
                    <div style="font-size:3rem;color:#10B981;"><i class="dw dw-checked"></i></div>
                    <h5 class="mt-2 text-success">Berhasil Dihapus!</h5>
                    <p class="text-muted">${data.message || 'Data agent berhasil dihapus.'}</p>
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