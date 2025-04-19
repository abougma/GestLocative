@extends("back-office.layouts.main")
@section("body")
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">{{ __('Mon assurance') }}</h4>
                    <p class="text-muted mb-0">{{ __('monAssurance') }}</p>
                </div>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paramètre</a></li>
                        <li class="breadcrumb-item active">Assurance</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0"> Assurance</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-categories">
                <i class="fa fa-plus-circle"></i> Ajouter
            </button>
        </div>

        <div class="card-body" style="max-height: 80vh; overflow-y: auto;">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Modal 5 -->
            <div class="modal fade" id="add-categories">
                <div class="modal-dialog modal-dialog-scrollable">
                    <form action="##" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter une assurance</h5>
                                <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal">
                                    <i class="mdi mdi-close"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('Document') }}</span>
                                        <input type="file" required name="name" class="form-control" placeholder="Document" />
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
@endsection
