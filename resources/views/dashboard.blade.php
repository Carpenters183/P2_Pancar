<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DeskApp Dashboard</title>

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/core.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/style.css') }}">
</head>

<body>

<div class="pre-loader">
	<div class="pre-loader-box">
		<div class="loader-logo">
			<img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}">
		</div>
	</div>
</div>

<div class="header">
	<div class="header-left">
		<div class="menu-icon dw dw-menu"></div>
	</div>
</div>

{{-- ================= SIDEBAR ================= --}}
<div class="left-side-bar">
	<div class="brand-logo">
		<a href="/dashboard">
			<img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" class="dark-logo">
			<img src="{{ asset('assets/vendors/images/deskapp-logo-white.svg') }}" class="light-logo">
		</a>
	</div>

	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">

				{{-- HOME --}}
				<li>
					<a href="/dashboard" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-house-1"></span>
						<span class="mtext">Home</span>
					</a>
				</li>

				{{-- FORMS --}}
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-edit2"></span>
						<span class="mtext">Forms</span>
					</a>
					<ul class="submenu">
						<li><a href="#">Form Basic</a></li>
						<li><a href="#">Form Wizard</a></li>
					</ul>
				</li>

				{{-- TABLES --}}
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-library"></span>
						<span class="mtext">Tables</span>
					</a>
					<ul class="submenu">
						<li><a href="#">Basic Table</a></li>
						<li><a href="#">Data Table</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>

<div class="mobile-menu-overlay"></div>

{{-- ================= MAIN CONTENT ================= --}}
<div class="main-container">
	<div class="pd-ltr-20">

		<div class="card-box pd-20 mb-30">
			<h4 class="font-20 weight-500">
				Selamat Datang 👋
			</h4>
			<p>Dashboard DeskApp sudah berhasil dijalankan di Laravel.</p>
		</div>

		<div class="card-box mb-30">
			<h2 class="h4 pd-20">Sample Table</h2>
			<table class="data-table table nowrap">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>John Doe</td>
						<td>john@example.com</td>
						<td>Active</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="footer-wrap pd-20 card-box">
			DeskApp Laravel Integration
		</div>

	</div>
</div>

{{-- ================= JS ================= --}}
<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>

<script src="{{ asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

</body>
</html>
