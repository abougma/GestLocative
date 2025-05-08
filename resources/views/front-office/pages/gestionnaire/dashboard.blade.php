@extends("back-office.layouts.main")
@section("body")
    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-align-right fs-14 text-muted"></i>
                    </div>
                    <h4 class="card-title mb-0">{{ __('Dashboard') }}</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Loyer</p>
                                    <h5 class="mb-0">$12,253</h5>
                                </div>
                                <div class="text-success float-end">
                                    <i class="mdi mdi-menu-up"> </i>2.2%
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Loyer</p>
                                    <h5 class="mb-0">$34,254</h5>
                                </div>
                                <div class="text-success float-end">
                                    <i class="mdi mdi-menu-up"> </i>2.1%
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Loyer</p>
                                    <h5 class="mb-0">$32,695</h5>
                                </div>
                                <div class="text-success float-end">
                                    <i class="mdi mdi-menu-up"> </i>1.8%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sales_figures" data-colors='["--bs-info", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>

    </div>
@endsection
