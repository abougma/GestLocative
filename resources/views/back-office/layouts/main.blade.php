@include("back-office.layouts.header", ['title' => $title ?? ''])
<div id="layout-wrapper">

    @include("back-office.layouts.topbar")

    @include("back-office.layouts.nav-bar")


    <!-- Start right Content here -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield("body")
            </div>
            <!-- end container-fluid -->
        </div>
        @include("back-office.layouts.toast")
        @include("back-office.layouts.footer")

    </div>
    <div class="custom-setting bg-primary pe-0 d-flex flex-column rounded-start">
        <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0" id="light-dark-mode">
            <i class="mdi mdi-brightness-7 align-middle"></i>
            <i class="mdi mdi-white-balance-sunny align-middle"></i>
        </button>
        <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm" data-toggle="fullscreen">
            <i class="mdi mdi-arrow-expand-all align-middle"></i>
        </button>
        <button type="button" class="btn btn-wide border-0 text-white fs-16 avatar-sm" id="layout-dir-btn">
            <span>RTL</span>
        </button>
    </div>
    <!-- end main content-->
</div>
@include("back-office.layouts.script")
