	<!DOCTYPE html>
	<html>

	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8">
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/core.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/style.css') }}">


		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-119386393-1');
		</script>
	</head>

	<body>
		        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">

                        <!-- ================= FORM ================= -->
                        <div class="col-md-5">
                            <div class="card">
						<div class="pull-left">
							<p class="text-white h4">All bootstrap element classies</p>
							<h4 class="text-blue h4">__Default Basic Forms__</h4>
						</div>
                                <div class="card-body">

                                    <h6>Sender</h6>
                                    <div class="mb-1">
                                        <input type="text" class="form-control" id="your_name" placeholder="Your Name">
                                    </div>
                                    <div class="mb-1">
                                        <textarea class="form-control" id="your_address" placeholder="Your Address"></textarea>
                                    </div>
									
                                    <div class="mb-3">
                                        <input type="date" class="form-control" id="date">
                                    </div>

                                    <h6>Recipient</h6>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="hm_name" placeholder="Hiring Manager's Name">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="hm_title" placeholder="Hiring Manager's Title">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="company_name" placeholder="Company Name">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="company_address" placeholder="Company Address"></textarea>
                                    </div>

                                    <h6>Body</h6>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="job_title" placeholder="Job Title">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="body_paragraph" rows="5"
                                            placeholder="Main body paragraph"></textarea>
                                    </div>

                                    <h6>Closing</h6>
                                    <div class="mb-2">
                                        <textarea class="form-control" id="closing_paragraph" rows="3"
                                            placeholder="Closing paragraph"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="signature" placeholder="Your Name (Signature)">
                                    </div>

                                    <div class="d-flex gap-2 mt-4">
                                        <button type="button" class="btn btn-primary w-100" id="btnSave">
                                            Tambahkan ke Database
                                        </button>

                                        <button type="button" class="btn btn-success w-100" id="btnPrint">
                                            Cetak ke PDF
                                        </button>

                                        <button type="button" class="btn btn-warning w-100" id="btnClear">
                                            Clear Semua
                                        </button>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- ================= PREVIEW ================= -->
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body" style="font-family: 'Times New Roman', serif;">

                                    <p id="p_name">[Your name]</p>
                                    <p id="p_address">[Your address]</p>
                                    <p id="p_date">[Date]</p>

                                    <br>

                                    <p id="p_hm_name">[Hiring manager's name]</p>
                                    <p id="p_hm_title">[Hiring manager's title]</p>
                                    <p id="p_company_name">[Company name]</p>
                                    <p id="p_company_address">[Company address]</p>

                                    <br>

                                    <p>Dear <span id="p_dear">[Hiring manager's name]</span></p>

                                    <p>
                                        I'm writing to express my interest in the position of
                                        <span id="p_job">[job title]</span> at
                                        <span id="p_company_inline">[company]</span>.
                                    </p>

                                    <p id="p_body">
                                        [Use the second paragraph to elaborate on how you would help the company.]
                                    </p>

                                    <p id="p_closing">
                                        [Mention the additional documents included with your cover letter.]
                                    </p>

                                    <br>

                                    <p>Sincerely,</p>
                                    <p id="p_signature">[Your name]</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- end page title -->


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
				</div>
		<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>
		<script>
        function live(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);

            input.addEventListener('input', () => {
                preview.innerText = input.value || preview.dataset.default;
            });
        }

        // set default text
        document.querySelectorAll('[id^="p_"]').forEach(el => {
            el.dataset.default = el.innerText;
        });

        live('your_name', 'p_name');
        live('your_address', 'p_address');
        live('date', 'p_date');

        live('hm_name', 'p_hm_name');
        live('hm_name', 'p_dear');
        live('hm_title', 'p_hm_title');
        live('company_name', 'p_company_name');
        live('company_name', 'p_company_inline');
        live('company_address', 'p_company_address');

        live('job_title', 'p_job');
        live('body_paragraph', 'p_body');
        live('closing_paragraph', 'p_closing');
        live('signature', 'p_signature');
    </script>

    <script>

        document.getElementById('btnSave').addEventListener('click', () => {
            alert('Data berhasil ditambahkan ke Database (simulasi)');
        });

        //document.getElementById('btnPrint').addEventListener('click', () => {
           // window.print();
        //});

        document.getElementById('btnClear').addEventListener('click', () => {

            document.querySelectorAll('input, textarea').forEach(el => {
                el.value = '';
            });

            document.querySelectorAll('[id^="p_"]').forEach(el => {
                el.innerText = el.dataset.default;
            });
        });
    </script>
	</body>

	</html>