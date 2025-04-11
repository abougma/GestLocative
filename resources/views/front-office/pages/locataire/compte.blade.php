@extends("back-office.layouts.main")
@section("body")
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">{{ __('monCompte') }}</h4>
                    <p class="text-muted mb-0">{{ __('messageSignalement') }}</p>
                </div>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paramètre</a></li>
                        <li class="breadcrumb-item active">Signalement</li>
                    </ol>
                </div>
            </div>
        </div>
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
    <div class="row">
        <div class="col-xxl-12">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header justify-content-between bg-primary-subtle border-primary-subtle">
                            <div class="card-icon text-muted"><i class="fas fa-piggy-bank"></i></div>
                            <h3 class="card-title">{{ __('releverCompte') }}</h3>
                        </div>
                        <div class="card-body bg-primary-subtle" style="background: url('assets/images/widget-1.png'); background-repeat: no-repeat; background-position: bottom left; background-size: 130px;">
                            <h2 class="-5 text-primary text-end my-3">$237,650</h2>
                        </div>
                        <div class="mt-n3 text-center">
                            <button class="btn btn-info">{{ __('telecharger') }}</button>
                        </div>
                        <div class="card-body">
                            <div class="tab-content p-0" id="income-tabContent">
                                <div class="tab-pane fade show active" id="income-march">
                                    <div class="card mb-0">
                                        <div class="rich-list rich-list-flush">
                                            <div class="rich-list-item">
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">$23,050</h4>
                                                    <p class="rich-list-subtitle mb-0">Annual companies taxes</p>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">$46,50</h4>
                                                    <p class="rich-list-subtitle mb-0">Avarage product price</p>
                                                </div>
                                            </div>
                                            <div class="rich-list-item">
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title mb-1">$260,700</h4>
                                                    <p class="rich-list-subtitle mb-0">Total annual profit before tax</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
