<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Dashboard - Rizqia Travel')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/styles/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/styles/style.css') }}">

    @stack('styles')
</head>

<body>

{{-- Pre-loader --}}
<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo">
            <img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}">
        </div>
    </div>
</div>

{{-- ===================== HEADER ===================== --}}
<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
    </div>

    <div class="header-right">
        @auth
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <i class="dw dw-user1"></i>
                    </span>
                    <span class="user-name">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="#">
                        <i class="dw dw-user1"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="dw dw-logout"></i> Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        @endauth
    </div>
</div>
{{-- ===================== END HEADER ===================== --}}

{{-- ===================== SIDEBAR ===================== --}}
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('/dashboard') }}">
            <img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="Logo" class="dark-logo">
            <img src="{{ asset('assets/vendors/images/deskapp-logo-white.svg') }}" alt="Logo" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>

    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                {{-- ===== DASHBOARD (semua role) ===== --}}
                <li>
                    <a href="{{ url('/dashboard') }}"
                        class="dropdown-toggle no-arrow {{ request()->is('dashboard') ? 'active' : '' }}">
                        <span class="micon dw dw-house-1"></span>
                        <span class="mtext">Dashboard</span>
                    </a>
                </li>

                @auth
                    @php
                        $roles = auth()->user()->roles->pluck('name')->toArray();
                    @endphp

                    {{-- ===== ADMIN ONLY ===== --}}
                    @if(in_array('admin', $roles))

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-user"></span>
                                <span class="mtext">Management Users</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('agent.tabel') }}"
                                        class="{{ request()->routeIs('agent.tabel') ? 'active' : '' }}">
                                        Agent
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('jemaah.tabel') }}"
                                        class="{{ request()->routeIs('jemaah.tabel') ? 'active' : '' }}">
                                        Jemaah
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-edit2"></span>
                                <span class="mtext">Management Paket</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('package.tabel') }}"
                                        class="{{ request()->routeIs('package.tabel') && !request()->route('type') ? 'active' : '' }}">
                                        Semua Paket
                                    </a>
                                </li>
                            </ul>
                        </li>

                    @endif

                    {{-- ===== LIST PAKET (Admin + Agent + Jemaah) ===== --}}
                    @if(array_intersect(['admin', 'agent', 'jemaah'], $roles))

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-edit2"></span>
                                <span class="mtext">List Paket</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('package.tabel', 'umrah') }}"
                                        class="{{ request()->route('type') == 'umrah' ? 'active' : '' }}">
                                        Umrah
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('package.tabel', 'haji') }}"
                                        class="{{ request()->route('type') == 'haji' ? 'active' : '' }}">
                                        Haji
                                    </a>
                                </li>
                            </ul>
                        </li>

                    @endif

                    {{-- ===== LIST BOOKING (Admin + Agent) ===== --}}
                    @if(array_intersect(['admin', 'agent'], $roles))

                        <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-calendar1"></span>
                                <span class="mtext">List Booking</span>
                            </a>
                        </li>

                    @endif

                @endauth

            </ul>
        </div>
    </div>
</div>

<div class="mobile-menu-overlay"></div>
{{-- ===================== END SIDEBAR ===================== --}}

{{-- ===================== MAIN CONTENT ===================== --}}
<div class="main-container">
    <div class="pd-ltr-20">

        @yield('content')

        {{-- Footer --}}
        <div class="footer-wrap pd-20 mb-20 card-box">
            {{ date('Y') }} &copy; Pancar Travel Umrah & Haji
        </div>

    </div>
</div>
{{-- ===================== END MAIN CONTENT ===================== --}}

{{-- JS --}}
<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>

<script src="{{ asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

@stack('scripts')

</body>
</html>