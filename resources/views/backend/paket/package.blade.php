@extends('backend.master')

@section('title', 'Paket Perjalanan')

@section('content')

    {{-- Page Header --}}
    <div class="page-header">
        <div class="page-title">
            <h5>
                <i class="dw dw-edit2"></i>
                Paket Perjalanan
            </h5>
        </div>
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Paket</li>
            </ol>
        </nav>
    </div>

    <div class="pd-ltr-20">

        {{-- Card Box Tabel Deskapp --}}
        <div class="card-box mb-30">
            <div class="pd-20">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="text-blue h4">
                            Daftar Paket
                            @if($type)
                                {{ ucfirst($type) }}
                            @endif
                        </h4>
                        <p class="mb-0 text-muted">Kelola paket perjalanan Haji &amp; Umroh</p>
                    </div>
                    @if (!in_array($type, ['haji', 'umrah']))
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddPackage">
                            <i class="dw dw-add"></i> Tambah Paket
                        </button>
                    @else
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddPackage">
                            <i class="dw dw-add"></i> Tambah Paket {{ ucfirst($type) }}
                        </button>
                    @endif
                </div>
            </div>

            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Kode</th>
                            <th>Nama Paket</th>
                            <th>Tipe</th>
                            <th>Harga Quad</th>
                            <th>Keberangkatan</th>
                            <th>Durasi</th>
                            <th>Kuota</th>
                            <th>Status</th>
                            <th class="datatable-nosort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($packages as $package)
                            @php
                                $availableSeat = $package->quota - $package->quota_used;
                                $statusClass = match($package->status) {
                                    'published' => 'badge badge-success',
                                    'draft'     => 'badge badge-warning',
                                    'closed'    => 'badge badge-danger',
                                    default      => 'badge badge-secondary',
                                };
                            @endphp
                            <tr>
                                {{-- Kode --}}
                                <td class="table-plus">
                                    <span class="font-weight-bold">{{ $package->code }}</span>
                                </td>

                                {{-- Nama --}}
                                <td>
                                    <strong>{{ $package->name }}</strong>
                                    <br>
                                    <small class="text-muted">{{ $package->year }}</small>
                                </td>

                                {{-- Tipe --}}
                                <td>
                                    <span class="badge badge-primary">{{ strtoupper($package->type) }}</span>
                                </td>

                                {{-- Harga --}}
                                <td>
                                    Rp {{ number_format($package->price, 0, ',', '.') }}
                                    <br>
                                    <small class="text-muted">DP {{ number_format($package->dp / 1000000, 1) }} Jt</small>
                                </td>

                                {{-- Keberangkatan --}}
                                <td>
                                    {{ \Carbon\Carbon::parse($package->departure_date)->translatedFormat('d M Y') }}
                                    <br>
                                    <small class="text-muted">{{ $package->departure_city }}</small>
                                </td>

                                {{-- Durasi --}}
                                <td>{{ $package->duration_days }} Hari</td>

                                {{-- Kuota --}}
                                <td>
                                    <span class="{{ $availableSeat <= 10 ? 'text-danger' : 'text-success' }} font-weight-bold">
                                        {{ $availableSeat }}
                                    </span>
                                    / {{ $package->quota }}
                                    <br>
                                    <small class="text-muted">tersedia</small>
                                </td>

                                {{-- Status --}}
                                <td>
                                    <span class="{{ $statusClass }}">{{ ucfirst($package->status) }}</span>
                                </td>

                                {{-- Aksi --}}
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('package.view', [$package->type, $package->id]) }}">
                                                <i class="dw dw-eye"></i> Lihat Detail
                                            </a>

                                            {{-- Ubah Status --}}
                                            <form method="POST"
                                                action="{{ route('package.set-status', [$package->type, $package->id]) }}"
                                                class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                @if($package->status !== 'published')
                                                    <button type="submit" name="status" value="published"
                                                        class="dropdown-item text-success">
                                                        <i class="dw dw-checked"></i> Publish
                                                    </button>
                                                @endif
                                                @if($package->status !== 'draft')
                                                    <button type="submit" name="status" value="draft"
                                                        class="dropdown-item text-warning">
                                                        <i class="dw dw-edit2"></i> Draft
                                                    </button>
                                                @endif
                                                @if($package->status !== 'closed')
                                                    <button type="submit" name="status" value="closed"
                                                        class="dropdown-item text-danger">
                                                        <i class="dw dw-cancel"></i> Tutup
                                                    </button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">
                                    <i class="dw dw-box" style="font-size: 2rem;"></i>
                                    <br>Belum ada paket tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Pagination --}}
                @if($packages->hasPages())
                    <div class="pd-20 d-flex justify-content-between align-items-center">
                        <div class="text-muted">
                            Menampilkan <b>{{ $packages->firstItem() }}</b> sampai <b>{{ $packages->lastItem() }}</b>
                            dari <b>{{ $packages->total() }}</b> paket
                        </div>
                        {{ $packages->links() }}
                    </div>
                @endif
            </div>
        </div>

        {{-- Modal Add Package & Modal Detail (tidak diubah) --}}
        <!-- Modal Add Package -->
            <div class="modal fade" id="modalAddPackage" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">

                        <!-- Header -->
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="dw dw-box text-primary mr-2"></i>
                                Tambah Paket Baru
                            </h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>

                        <!-- Body -->
                        <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
                            <form id="addPackageForm" method="POST">
                                @csrf

                                {{-- ── Informasi Dasar ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-information mr-1"></i>
                                        Informasi Dasar Paket
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Tipe Paket <span class="text-danger">*</span></label>
                                                <select name="type" id="packageType" class="form-control" required>
                                                    <option value="">Pilih Tipe</option>
                                                    <option value="umrah">Umrah</option>
                                                    <option value="haji">Haji</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Kode Paket</label>
                                                <input type="text" id="packageCodePreview" class="form-control" readonly placeholder="Auto dari tipe">
                                                <input type="hidden" name="code" id="packageCodeReal">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Status Paket <span class="text-danger">*</span></label>
                                                <select name="status" class="form-control" required>
                                                    <option value="">Pilih Status</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="published">Published</option>
                                                    <option value="closed">Closed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Paket <span class="text-danger">*</span></label>
                                                <input type="text" name="name" id="packageName" class="form-control"
                                                    placeholder="Contoh: Paket Haji Reguler 1446H" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Slug (URL)</label>
                                                <input type="text" name="slug" id="packageSlug" class="form-control"
                                                    placeholder="Auto dari nama paket" readonly>
                                                <small class="text-muted">Otomatis dari nama paket</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ── Harga & Kuota ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-money mr-1"></i> Harga &amp; Kuota
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Harga Quad (4 Orang) <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                    <input type="number" name="price" class="form-control" placeholder="45500000" required min="0" step="100000">
                                                </div>
                                                <small class="text-muted">Harga per orang (Quad)</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Harga Triple (3 Orang) <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                    <input type="number" name="price_triple" class="form-control" placeholder="47200000" required min="0" step="100000">
                                                </div>
                                                <small class="text-muted">Harga per orang (Triple)</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Harga Double (2 Orang) <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                    <input type="number" name="price_double" class="form-control" placeholder="49800000" required min="0" step="100000">
                                                </div>
                                                <small class="text-muted">Harga per orang (Double)</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>DP (Down Payment) <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                    <input type="number" name="dp" class="form-control" placeholder="5000000" required min="0" step="100000">
                                                </div>
                                                <small class="text-muted">Minimal pembayaran awal per orang</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Kuota Total <span class="text-danger">*</span></label>
                                                <input type="number" name="quota" class="form-control" placeholder="120" required min="1">
                                                <small class="text-muted">Jumlah seat tersedia</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Kuota Terpakai</label>
                                                <input type="number" name="quota_used" class="form-control" placeholder="0" value="0" min="0">
                                                <small class="text-muted">Jumlah yang sudah terdaftar</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ── Jadwal & Durasi ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-calendar1 mr-1"></i> Jadwal &amp; Durasi
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Tanggal Keberangkatan <span class="text-danger">*</span></label>
                                                <input type="date" name="departure_date" id="departureDate" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Waktu Keberangkatan <span class="text-danger">*</span></label>
                                                <input type="time" name="departure_time" class="form-control" required>
                                                <small class="text-muted">Format 24 jam (contoh: 08:00)</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Durasi (Hari) <span class="text-danger">*</span></label>
                                                <input type="number" name="duration_days" id="durationDays" class="form-control" placeholder="9" required min="1">
                                                <small class="text-muted">Lama perjalanan dalam hari</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>Tanggal Kepulangan <span class="text-danger">*</span></label>
                                                <input type="date" name="return_date" id="returnDate" class="form-control" required>
                                                <small class="text-muted">Otomatis dihitung dari berangkat + durasi</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>Waktu Kepulangan <span class="text-danger">*</span></label>
                                                <input type="time" name="return_time" class="form-control" required>
                                                <small class="text-muted">Estimasi waktu tiba kembali</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ── Transportasi ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-airplane mr-1"></i> Transportasi
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Kota Keberangkatan <span class="text-danger">*</span></label>
                                                <input type="text" name="departure_city" class="form-control" placeholder="Jakarta (CGK)" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Kota Tujuan <span class="text-danger">*</span></label>
                                                <input type="text" name="destination_city" class="form-control" placeholder="Jeddah (JED)" required>
                                                <small class="text-muted">Bandara tujuan pertama</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label>Maskapai <span class="text-danger">*</span></label>
                                                <input type="text" name="airline" class="form-control" placeholder="Garuda Indonesia" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ── Akomodasi Hotel ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-house-1 mr-1"></i> Akomodasi Hotel
                                    </h6>
                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <div class="form-group">
                                                <label>Hotel Makkah <span class="text-danger">*</span></label>
                                                <input type="text" name="hotel_makkah" class="form-control" placeholder="Hilton Makkah Convention" required>
                                                <small class="text-muted">Contoh: Hilton Makkah Convention</small>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <div class="form-group">
                                                <label>Hotel Madinah <span class="text-danger">*</span></label>
                                                <input type="text" name="hotel_madinah" class="form-control" placeholder="Pullman Madinah Central" required>
                                                <small class="text-muted">Contoh: Pullman Madinah Central</small>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <div class="form-group">
                                                <label>Rating <span class="text-danger">*</span></label>
                                                <select name="hotel_rating" class="form-control" required>
                                                    <option value="">★</option>
                                                    <option value="3">★★★</option>
                                                    <option value="4">★★★★</option>
                                                    <option value="5">★★★★★</option>
                                                </select>
                                                <small class="text-muted">Bintang</small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="alert alert-info d-flex align-items-center">
                                                <i class="dw dw-information mr-2"></i>
                                                Tipe kamar <strong class="mx-1">(Quad / Triple / Double)</strong> akan dipilih jamaah saat <strong>booking</strong>, sesuai harga yang diinput di atas.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ── Detail Paket (Opsional) ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-contract mr-1"></i>
                                        Detail Paket <span class="text-muted font-weight-normal">(Opsional)</span>
                                    </h6>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label>Deskripsi Paket</label>
                                                <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi singkat tentang paket ini..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>Fasilitas Termasuk</label>
                                                <textarea name="includes" class="form-control" rows="4" placeholder="- Tiket pesawat PP&#10;- Hotel bintang 4&#10;- Makan 3x sehari&#10;- Visa&#10;- Perlengkapan"></textarea>
                                                <small class="text-muted">Pisahkan dengan enter atau dash (-)</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>Tidak Termasuk</label>
                                                <textarea name="excludes" class="form-control" rows="4" placeholder="- Kelebihan bagasi&#10;- Pengeluaran pribadi&#10;- Tips"></textarea>
                                                <small class="text-muted">Pisahkan dengan enter atau dash (-)</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>Syarat &amp; Ketentuan</label>
                                                <textarea name="terms" class="form-control" rows="3" placeholder="Syarat dan ketentuan untuk paket ini..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label>Catatan Tambahan</label>
                                                <textarea name="notes" class="form-control" rows="3" placeholder="Catatan penting atau informasi tambahan..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- ── Itinerary Perjalanan ── --}}
                                <div class="card-box pd-20 mb-20">
                                    <h6 class="text-blue mb-15">
                                        <i class="dw dw-map mr-1"></i>
                                        Itinerary Perjalanan <span class="text-muted font-weight-normal">(Opsional)</span>
                                    </h6>
                                    <div id="itineraryContainer">
                                        <div class="card-box pd-20 mb-20 itinerary-item" data-day="1">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <span class="badge badge-primary pd-5-10">Hari 1</span>
                                                <button type="button" class="btn btn-sm btn-danger btn-remove-itinerary"
                                                    onclick="removeItinerary(1)" style="display: none;">
                                                    <i class="dw dw-delete-3"></i> Hapus
                                                </button>
                                            </div>
                                            <input type="hidden" name="itinerary[0][day_number]" value="1">
                                            <div class="form-group">
                                                <label>Judul Kegiatan</label>
                                                <input type="text" name="itinerary[0][title]" class="form-control"
                                                    placeholder="Contoh: Keberangkatan dari Jakarta">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label>Deskripsi Kegiatan</label>
                                                <textarea name="itinerary[0][description]" class="form-control" rows="3"
                                                    placeholder="Deskripsi detail kegiatan hari ini..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="addItinerary()">
                                        <i class="dw dw-add"></i> Tambah Hari Berikutnya
                                    </button>
                                </div>

                            </form>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="dw dw-cancel mr-1"></i> Batal
                            </button>
                            <button type="submit" class="btn btn-primary" form="addPackageForm">
                                <i class="dw dw-checked mr-1"></i> Simpan Paket
                            </button>
                        </div>

                    </div>
                </div>
            </div>

<!-- Modal Detail Package -->
            <div class="modal fade" id="modalDetailPackage" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">

                        <!-- Header -->
                        <div class="modal-header">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <i class="dw dw-box text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="modal-title" id="detailPackageName">Nama Paket</h3>
                                    <p class="text-muted mb-0 font-14">Informasi lengkap paket Haji / Umroh</p>
                                </div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="dw dw-cancel"></i>
                            </button>
                        </div>

                        <!-- Body -->
                        <div class="modal-body" style="max-height: 75vh; overflow-y: auto;">
                            <div class="row">

                                <!-- Informasi Dasar -->
                                <div class="col-md-6 mb-3">
                                    <strong>Tipe Paket:</strong>
                                    <p id="detailPackageType"></p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Status Paket:</strong>
                                    <p id="detailPackageStatus"></p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <strong>Slug (URL):</strong>
                                    <p id="detailPackageSlug"></p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <strong>Deskripsi Paket:</strong>
                                    <p id="detailPackageDescription"></p>
                                </div>

                                <!-- Harga & Kuota -->
                                <div class="col-md-3">
                                    <strong>Harga Quad:</strong>
                                    <p id="detailPackagePrice"></p>
                                </div>
                                <div class="col-md-3">
                                    <strong>Harga Triple:</strong>
                                    <p id="detailPackagePriceTriple"></p>
                                </div>
                                <div class="col-md-3">
                                    <strong>Harga Double:</strong>
                                    <p id="detailPackagePriceDouble"></p>
                                </div>
                                <div class="col-md-3">
                                    <strong>DP:</strong>
                                    <p id="detailPackageDP"></p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Kuota Total:</strong>
                                    <p id="detailPackageQuota"></p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Kuota Terpakai:</strong>
                                    <p id="detailPackageQuotaUsed"></p>
                                </div>

                                <!-- Jadwal & Durasi -->
                                <div class="col-md-4 mb-3">
                                    <strong>Tanggal Keberangkatan:</strong>
                                    <p id="detailPackageDepartureDate"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Waktu Keberangkatan:</strong>
                                    <p id="detailPackageDepartureTime"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Durasi (Hari):</strong>
                                    <p id="detailPackageDuration"></p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Tanggal Kepulangan:</strong>
                                    <p id="detailPackageReturnDate"></p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <strong>Waktu Kepulangan:</strong>
                                    <p id="detailPackageReturnTime"></p>
                                </div>

                                <!-- Transportasi -->
                                <div class="col-md-4 mb-3">
                                    <strong>Kota Keberangkatan:</strong>
                                    <p id="detailPackageDepartureCity"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Kota Tujuan:</strong>
                                    <p id="detailPackageDestinationCity"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Maskapai:</strong>
                                    <p id="detailPackageAirline"></p>
                                </div>

                                <!-- Hotel -->
                                <div class="col-md-5 mb-3">
                                    <strong>Hotel Makkah:</strong>
                                    <p id="detailPackageHotelMakkah"></p>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <strong>Hotel Madinah:</strong>
                                    <p id="detailPackageHotelMadinah"></p>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <strong>Rating:</strong>
                                    <p id="detailPackageHotelRating"></p>
                                </div>

                                <!-- Fasilitas & Ketentuan -->
                                <div class="col-md-4 mb-3">
                                    <strong>Fasilitas Termasuk:</strong>
                                    <p id="detailPackageIncludes"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Tidak Termasuk:</strong>
                                    <p id="detailPackageExcludes"></p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Syarat & Ketentuan:</strong>
                                    <p id="detailPackageTerms"></p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <strong>Catatan Tambahan:</strong>
                                    <p id="detailPackageNotes"></p>
                                </div>

                                <!-- Itinerary -->
                                <div class="col-md-12 mb-3">
                                    <strong>Itinerary Perjalanan:</strong>
                                    <ul id="detailPackageItinerary" class="list-group list-group-flush mt-2"></ul>
                                </div>

                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="dw dw-cancel"></i>
                                Tutup
                            </button>
                        </div>

                    </div>
                </div>
            </div>


    </div>

    </div>

    <script>
        // Auto-generate slug from package name
        document.getElementById('packageName').addEventListener('input', function(e) {
            const name = e.target.value;
            const slug = name
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('packageSlug').value = slug;
        });

        // Auto-calculate return date
        function calculateReturnDate() {
            const departureDate = document.getElementById('departureDate').value;
            const durationDays = parseInt(document.getElementById('durationDays').value);

            if (departureDate && durationDays) {
                const departure = new Date(departureDate);
                const returnDate = new Date(departure);
                returnDate.setDate(departure.getDate() + durationDays - 1); // -1 karena hari keberangkatan dihitung

                // Format to YYYY-MM-DD
                const formattedDate = returnDate.toISOString().split('T')[0];
                document.getElementById('returnDate').value = formattedDate;
            }
        }

        document.getElementById('departureDate').addEventListener('change', calculateReturnDate);
        document.getElementById('durationDays').addEventListener('input', calculateReturnDate);

        // Itinerary Management
        let itineraryCount = 1;

        function addItinerary() {
            itineraryCount++;
            const container = document.getElementById('itineraryContainer');

            const itineraryHTML = `
        <div class="card-box pd-20 mb-20 itinerary-item" data-day="${itineraryCount}">
            <div class="d-flex justify-content-between align-items-center mb-10">
                <span class="badge badge-primary">Hari ${itineraryCount}</span>
                <button type="button" class="btn btn-sm btn-danger btn-remove-itinerary" onclick="removeItinerary(${itineraryCount})">
                    <i class="dw dw-delete-3"></i> Hapus
                </button>
            </div>
            <input type="hidden" name="itinerary[${itineraryCount - 1}][day_number]" value="${itineraryCount}">
            <div class="form-group">
                <label>Judul Kegiatan</label>
                <input type="text" name="itinerary[${itineraryCount - 1}][title]" class="form-control"
                    placeholder="Contoh: Tawaf & Sai">
            <div class="form-group mb-0">
                <label>Deskripsi Kegiatan</label>
                <textarea name="itinerary[${itineraryCount - 1}][description]" class="form-control" rows="3"
                    placeholder="Deskripsi detail kegiatan hari ini..."></textarea>
        </div>
    `;

            container.insertAdjacentHTML('beforeend', itineraryHTML);

            // Show remove button on first item if there's more than 1
            if (itineraryCount > 1) {
                const firstRemoveBtn = document.querySelector('.itinerary-item[data-day="1"] .btn-remove-itinerary');
                if (firstRemoveBtn) {
                    firstRemoveBtn.style.display = 'flex';
                }
            }
        }

        function removeItinerary(dayNumber) {
            const item = document.querySelector(`.itinerary-item[data-day="${dayNumber}"]`);
            if (item) {
                item.remove();
                itineraryCount--;

                // Reorder remaining items
                const items = document.querySelectorAll('.itinerary-item');
                items.forEach((item, index) => {
                    const actualDay = index + 1;
                    item.setAttribute('data-day', actualDay);
                    item.querySelector('.itinerary-day-badge').textContent = `Hari ${actualDay}`;
                    item.querySelector('input[type="hidden"]').value = actualDay;
                    item.querySelector('input[type="hidden"]').name = `itinerary[${index}][day_number]`;
                    item.querySelector('input[type="text"]').name = `itinerary[${index}][title]`;
                    item.querySelector('textarea').name = `itinerary[${index}][description]`;

                    // Update remove button onclick
                    const removeBtn = item.querySelector('.btn-remove-itinerary');
                    if (removeBtn) {
                        removeBtn.setAttribute('onclick', `removeItinerary(${actualDay})`);
                    }
                });

                // Hide remove button on first item if only 1 remains
                if (items.length === 1) {
                    const firstRemoveBtn = items[0].querySelector('.btn-remove-itinerary');
                    if (firstRemoveBtn) {
                        firstRemoveBtn.style.display = 'none';
                    }
                }

                itineraryCount = items.length;
            }
        }

        // Form validation and submission
        document.getElementById('addPackageForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Add your validation logic here
            const formData = new FormData(this);

            // Example: Check if quota_used is not greater than quota
            const quota = parseInt(formData.get('quota'));
            const quotaUsed = parseInt(formData.get('quota_used'));

            if (quotaUsed > quota) {
                alert('Kuota terpakai tidak boleh lebih dari kuota total!');
                return;
            }

            // Submit the form
            this.submit();
        });

        document.getElementById('packageName').addEventListener('input', function() {
            let slug = this.value.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
            document.getElementById('packageSlug').value = slug;
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const typeSelect = document.getElementById("packageType");
            const previewInput = document.getElementById("packageCodePreview");
            const realInput = document.getElementById("packageCodeReal");

            typeSelect.addEventListener("change", function() {

                let type = this.value;

                if (!type) {
                    previewInput.value = "";
                    realInput.value = "";
                    return;
                }

                fetch("{{ url('/package/get-next-code') }}/" + type)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response not ok");
                        }
                        return response.json();
                    })
                    .then(data => {
                        previewInput.value = data.code ?? "";
                        realInput.value = data.code ?? "";
                    })
                    .catch(error => {
                        console.error("Fetch error:", error);
                    });

            });

        });
    </script>
    <script>
        document.getElementById('packageType').addEventListener('change', function() {
            let type = this.value;

            if (type) {
                let form = document.getElementById('addPackageForm');
                form.action = "/package/" + type + "/store";
            }
        });
    </script>

@endsection