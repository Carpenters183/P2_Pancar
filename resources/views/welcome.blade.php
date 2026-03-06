<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizqia Job Applications Letter</title>
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <div class="container">

            <!-- ================= LEFT FORM ================= -->
            <div class="left">

                <!-- ================= SECTION A ================= -->
                <div id="step-a" class="step">
                    <h2 class="form-title"><i class="fas fa-edit"></i> Isi Data Surat</h2>
                    <div class="form-group">
                        <label>Kota & Tanggal</label>
                        <input type="text" id="kota_tanggal">
                    </div>

                    <div class="form-group">
                        <label>Subjek Surat</label>
                        <input type="text" id="subjek">
                    </div>

                    <div class="form-group">
                        <label>Penerima & Alamat</label>
                        <textarea type="text" id="penerima"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Paragraf 1 (Pembuka)</label>
                        <textarea type="text" id="pembuka"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Paragraf 2 (Isi)</label>
                        <textarea id="isi"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Paragraf 3 (Penutup)</label>
                        <textarea id="penutup"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nama Pengirim</label>
                        <input type="text" id="penyusun">
                    </div>



                    <div class="form-sections mb-3">
                        <div class="button-list">
                            <button type="button" class="btn" id="btnSimpan"
                                style="background-color: #4499f5; color: white;">Simpan Surat</button>
                            <button type="button" class="btn" id="btnPrint"
                                style="background-color: #fa5252; color: white;">Cetak Surat (PDF)</button>
                            <button type="button" class="btn" id="btnBackD"
                                style="background-color: #504d4d; color: white;">Clear</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ================= RIGHT PREVIEW ================= -->
            <div class="right">
                <div class="preview-header">
                </div>

                <div class="info-header">
                    <h2><span id="p-fase">JOB APPLICATION LETTER</span></h2><br>
                    <div class="info-text">
                        <p><span id="p-kota_tanggal">Bandung, 30 Januari 2026</span></p>
                    </div>
                </div>

                <!-- A -->
                <h4 class="subject-line">Subject: <span id="p-subjek">Programmer</span></h4>
                <p>Dear,<span id=""></span></p>
                <p><span id="p-penerima">HRD Manager<br>Jl.Antapani No.5<br>Bandung </span></p><br>
                <p>Dear,<span id=""></span></p>
                <p><span id="p-pembuka">Berdasarkan informasi yang saya peroleh melalui LinkedIn perusahaan pada
                        [Tanggal], saya bermaksud mengajukan lamaran pekerjaan sebagai [Nama Posisi] di [Nama
                        Perusahaan].</span></p><br>
                <p><span id="p-isi">Saya adalah lulusan [Jurusan] dengan pengalaman [Jumlah Tahun] tahun di bidang
                        terkait. Selama pengalaman sebelumnya, saya berhasil [Sebutkan pencapaian/keahlian khusus], yang
                        saya yakin sesuai dengan kebutuhan tim [Nama Perusahaan].</span></p><br>
                <p><span id="p-penutup">Terima kasih atas pertimbangan Bapak/Ibu. Saya sangat berharap dapat
                        mendiskusikan kualifikasi saya lebih detail dalam sesi wawancara. Hormat saya, [Nama
                        Anda]</span></p><br>
                <p><span id="">Hormat Saya,</span></p>
                <p><span id=""></span></p><br>
                <p><span id="p-penyusun">Rizqiaa</span></p><br>

            </div>


        </div>
    </div>
    <script src="{{ asset('js/preview.js') }}"></script>
</body>

</html>
