@extends("back-office.layouts.main")
@section("body")

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Mes documents</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Elements</a></li>
                        <li class="breadcrumb-item active">Mes documents</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Documents</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-categories">
                <i class="fa fa-plus-circle"></i> Ajouter
            </button>
        </div>
    </div>
    <div class="main-content ms-n3 mt-n5">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header card-header-bordered">
                                <h3 class="card-title">{{ __('documentGestion') }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-3">
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-2">
                                            <label class="col-form-label text-sm-end">Contrat de bail</label>
                                        </div>
                                        <div class="col-sm-8 col-lg-10">
                                            <button class="btn btn-primary" id="swal-1">Télécharger</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-2">
                                            <label class="col-form-label text-sm-end">Document d'assurance</label>
                                        </div>
                                        <div class="col-sm-8 col-lg-10">
                                            <button class="btn btn-primary" id="swal-2">Télécharger</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-2">
                                            <label class="col-form-label text-sm-end">Etat des lieux entrant</label>
                                        </div>
                                        <div class="col-sm-8 col-lg-10">
                                            <button class="btn btn-primary" id="swal-3">Télécharger</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-2">
                                            <label class="col-form-label text-sm-end">Notice d'information</label>
                                        </div>
                                        <div class="col-sm-8 col-lg-10">
                                            <button class="btn btn-primary" id="swal-4">Télécharger</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>

    <!-- Ajout d'un signalement -->
    <div class="row">
        <div class="col-md-12">
            <!-- Modal 5 -->
            <div class="modal fade" id="add-categories">
                <div class="modal-dialog modal-dialog-scrollable">
                    <form action="##" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter un document</h5>
                                <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal">
                                    <i class="mdi mdi-close"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('document') }}</span>
                                        <input type="file" required name="name" class="form-control" placeholder="Documents" />
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="reset">Annuler</button>
                                <button class="btn btn-outline-success" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
