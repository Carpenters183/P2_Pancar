<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DeskApp - Application Letter</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/styles/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/styles/style.css') }}">
    <style>
.letter-header-right {
    text-align: right;
    margin-bottom: 20px;
}
</style>
</head>

<body>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                <!-- ================= FORM ================= -->
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="text-blue mb-3">Application Letter Form</h5>

                            <h6>Sender</h6>
                            <input type="text" class="form-control mb-1" id="your_name" placeholder="Your Name">
                            <textarea class="form-control mb-1" id="your_address" placeholder="Your Address"></textarea>
                            <input type="date" class="form-control mb-3" id="date">

                            <h6>Recipient</h6>
                            <input type="text" class="form-control mb-1" id="hm_name" placeholder="Hiring Manager Name">
                            <input type="text" class="form-control mb-1" id="hm_title" placeholder="Hiring Manager Title">
                            <input type="text" class="form-control mb-1" id="company_name" placeholder="Company Name">
                            <textarea class="form-control mb-3" id="company_address" placeholder="Company Address"></textarea>

                            <h6>Body</h6>
                            <input type="text" class="form-control mb-1" id="job_title" placeholder="Job Title">
                            <textarea class="form-control mb-3" id="body_paragraph" rows="4" placeholder="Body Paragraph"></textarea>

                            <h6>Closing</h6>
                            <textarea class="form-control mb-1" id="closing_paragraph" rows="3" placeholder="Closing Paragraph"></textarea>
                            <input type="text" class="form-control mb-3" id="signature" placeholder="Your Name (Signature)">

                            <div class="d-flex gap-2">
                                <button class="btn btn-primary w-100" id="btnSave">Save</button>
                                <button class="btn btn-success w-100" id="btnPrint">Cetak ke PDF</button>
                                <button class="btn btn-warning w-100" id="btnClear">Clear</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ================= PREVIEW ================= -->
                <div class="col-md-7">
                    <div class="card" id="areaSurat">
                        <div class="card-body" style="font-family:'Times New Roman', serif;">
                            <!-- Judul Surat -->
                            <h4 class="text-center fw-bold mb-4 letter-title">
                                Application Letter
                            </h4>
                        
                            <div class="letter-header-right">
                                <p id="p_address">[Your address]</p>
                                <p id="p_date">[Date]</p>
                            </div>

                             <p id="p_name">[Your name]</p>

                            <br>

                            <p id="p_hm_name">[Hiring manager]</p>
                            <p id="p_hm_title">[Title]</p>
                            <p id="p_company_name">[Company]</p>
                            <p id="p_company_address">[Company address]</p>

                            <br>

                            <p>Dear <span id="p_dear">[Hiring manager]</span>,</p>

                            <p>
                                I'm writing to express my interest in the position of
                                <span id="p_job">[job]</span> at
                                <span id="p_company_inline">[company]</span>.
                            </p>

                            <p id="p_body">[Body paragraph]</p>

                            <p id="p_closing">[Closing paragraph]</p>

                            <br>

                            <p>Sincerely,</p>
                            <p id="p_signature">[Signature]</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- JS -->
<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>

<script>
    function live(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        input.addEventListener('input', () => {
            preview.innerText = input.value || preview.dataset.default;
        });
    }

    document.querySelectorAll('[id^="p_"]').forEach(el => {
        el.dataset.default = el.innerText;
    });

    live('your_name','p_name');
    live('your_address','p_address');
    live('date','p_date');
    live('hm_name','p_hm_name');
    live('hm_name','p_dear');
    live('hm_title','p_hm_title');
    live('company_name','p_company_name');
    live('company_name','p_company_inline');
    live('company_address','p_company_address');
    live('job_title','p_job');
    live('body_paragraph','p_body');
    live('closing_paragraph','p_closing');
    live('signature','p_signature');
</script>

<script>
document.getElementById("btnPrint").addEventListener("click", function () {

    const surat = document.getElementById("areaSurat").innerHTML;
    const win = window.open("", "_blank", "width=800,height=600");

    win.document.write(`
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

<style>
    @page {
        margin: 3cm;
    }

    body {
        font-family: "Times New Roman", serif;
        color: #000;
        line-height: 1.6;
    }

    /* JUDUL SURAT */
    h4, .letter-title {
        text-align: center !important;
        font-weight: bold;
        margin-bottom: 30px;
        width: 100%;
        display: block;
    }
.letter-header-right {
    text-align: right !important;
    margin-bottom: 20px;
}
    
    /* BUANG SEMUA STYLE TEMPLATE */
    .card,
    .card-body {
        border: none !important;
        padding: 0 !important;
        margin: 0 !important;
        box-shadow: none !important;
    }

    p {
        margin: 0 0 10px 0;
    }
</style>

</head>
<body>

${surat}

<script>
    window.onload = function () {
        window.print();
        window.onafterprint = window.close;
    }
<\/script>

</body>
</html>
    `);

    win.document.close();
});
</script>

</body>
</html>
