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
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">


        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-fluid ">
            <!--begin::Row-->
            <div class="row gy-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-4 mb-5 mb-xl-10">
                    <!--begin::Chart widget 27-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header py-7">
                            <!--begin::Statistics-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Title-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35,568</span>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light-danger fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        8.02%
                                    </span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Organic Sessions</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-1">
                            <div id="kt_charts_widget_27" class="min-h-auto"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 27-->


                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xxl-4 mb-5 mb-xl-10">
                    <!--begin::Chart widget 28-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header py-7">
                            <!--begin::Statistics-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Title-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        2.2%
                                    </span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 28-->


                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xxl-4 mb-5 mb-xl-10">

                    <!--begin::List widget 9-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header py-7">

                            <!--begin::Statistics-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Title-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        2.2%
                                    </span>
                                    <!--end::Label-->

                                </div>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->

                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body card-body d-flex justify-content-between flex-column pt-3">

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                2.6%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                            In</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                            Media</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                0.4%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                0.2%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                            Channel</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-4 me-3">978</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                4.1%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                            Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                8.3%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 9-->


                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-4 mb-xxl-10">

                    <!--begin::List widget 7-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header py-7">
                            <!--begin::Statistics-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Title-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0.37%</span>
                                    <!--end::Title-->

                                    <!--begin::Badge-->
                                    <span class="badge badge-light-danger fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        8.02%
                                    </span>
                                    <!--end::Badge-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Online store convertion rate</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Items-->
                            <div class="mb-0">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-magnifier fs-3 text-gray-600"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Search
                                                Retargeting</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-6 me-3">0.24%</span>
                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-center">
                                            <!--begin::label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                2.4%
                                            </span>
                                            <!--end::label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-tiktok fs-3 text-gray-600"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                                Retargeting</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-6 me-3">0.94%</span>
                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-center">
                                            <!--begin::label-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                9.4%
                                            </span>
                                            <!--end::label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-sms fs-3 text-gray-600"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                                Retargeting</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-6 me-3">1.23%</span>
                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-center">
                                            <!--begin::label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                0.2%
                                            </span>
                                            <!--end::label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-icon fs-3 text-gray-600"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals
                                                Customers</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-6 me-3">0.08%</span>
                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-center">
                                            <!--begin::label-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                0.4%
                                            </span>
                                            <!--end::label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-duotone ki-abstract-25 fs-3 text-gray-600"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->
                                        <span class="text-gray-800 fw-bold fs-6 me-3">0.46%</span>
                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-center">
                                            <!--begin::label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                8.3%
                                            </span>
                                            <!--end::label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Item-->


                            </div>
                            <!--end::Items-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 7-->
                </div>
                <!--end::Col-->


                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">

                    <!--begin::Chart widget 20-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header py-5">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                    class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">
                                        Loading date range...
                                    </div>
                                    <!--end::Display range-->

                                    <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span></i>
                                </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
                            <!--begin::Items-->
                            <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                                <!--begin::Item-->
                                <div class="me-md-2">
                                    <!--begin::Statistics-->
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Targets for April</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div
                                    class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                                    <!--begin::Statistics-->
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                        <!--end::Currency-->

                                        <!--begin::Value-->
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                                        <!--end::Value-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-black-up fs-7 text-success ms-n1"></i> 4.5%
                                        </span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">GAP</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->

                            <!--begin::Chart-->
                            <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue"
                                style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 20-->

                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row g-5 g-xl-10 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">

                    <!--begin::List widget 8-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Visits by Country</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">20 countries share 97% visits</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="index1522.html?page=apps/ecommerce/sales/listing"
                                    class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Items-->
                            <div class="m-0">

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="assets/media/flags/united-states.svg" class="me-4 w-25px"
                                        style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">United
                                                States</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                link clicks</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    2.6%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="assets/media/flags/brazil.svg" class="me-4 w-25px"
                                        style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social
                                                Channels </span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    0.4%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="assets/media/flags/turkey.svg" class="me-4 w-25px"
                                        style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                Campaigns</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    0.2%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="assets/media/flags/france.svg" class="me-4 w-25px"
                                        style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                Radius visits</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    4.1%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="assets/media/flags/india.svg" class="me-4 w-25px"
                                        style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many
                                                Sources</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    8.3%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <img src="assets/media/flags/sweden.svg" class="me-4 w-25px"
                                        style="border-radius: 4px" alt="" />
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                Network</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    1.9%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->


                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::LIst widget 8-->


                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">

                    <!--begin::List widget 9-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header py-7">

                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Social Network Visits</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->

                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body card-body d-flex justify-content-between flex-column pt-3">

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->

                                        <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                2.6%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                            In</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                            Media</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->

                                        <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                0.4%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span
                                            class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->

                                        <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                0.2%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                            Channel</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->

                                        <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                4.1%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                            Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->

                                        <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                8.3%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Flag-->
                                <img src="assets/media/svg/brand-logos/facebook-3.svg" class="me-4 w-30px"
                                    style="border-radius: 4px" alt="" />
                                <!--end::Flag-->

                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                            Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Number-->

                                        <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>

                                        <!--end::Number-->

                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                1.9%
                                            </span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->


                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 9-->


                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-4 mb-5 mb-xl-10">
                    <!--begin::Chart widget 14-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Departments</span>

                                <span class="text-gray-500 pt-2 fw-semibold fs-6">Performance & achievements</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                </button>


                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Create Invoice
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">
                                            Create Payment

                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                title="Specify a target name for future usage and reference">
                                                <i class="ki-duotone ki-information fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Generate Bill
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Plans
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Billing
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Statements
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->

                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">
                                                            Recuring
                                                        </span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Chart container-->
                            <div id="kt_charts_widget_14_chart" class="w-100 h-350px"></div>
                            <!--end::Chart container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection
