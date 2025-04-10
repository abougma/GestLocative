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
    <!-- end main content-->
</div>
@include("back-office.layouts.script")
