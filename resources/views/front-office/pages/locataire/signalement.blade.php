@extends("back-office.layouts.main")
@section("body")
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Mes signalements</h4>
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
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Signalement</h4>
                    <button class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#add-categories">
                        <i class="fa fa-plus-circle"></i>
                    </button>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-hover table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('domaine') }}</th>
                            <th>{{ __('equipement') }}</th>
                            <th>{{ __('piece') }}</th>
                            <th>{{ __('panne') }}</th>
                            <th>{{ __('description') }}</th>
                            <th>{{ __('dateCreation') }}</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=" d-flex justify-content-between align-items-center">
                                <a class="btn btn-info" href="#"  data-bs-toggle="tooltip" data-bs-original-title="Modifier">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button  data-bs-toggle="tooltip" data-bs-original-title="Supprimer" class="btn btn-danger" onclick='showDeleteModal("#", "#","#")'>
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
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
                                <h5 class="modal-title">Ajouter un signalement</h5>
                                <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal">
                                    <i class="mdi mdi-close"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('domaine') }}</span>
                                        <input type="text" required name="name" class="form-control" placeholder="Domaine" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('equipement') }}</span>
                                        <input type="text" required name="name" class="form-control" placeholder="Equipement" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('piece') }}</span>
                                        <input type="text" required name="name" class="form-control" placeholder="Pièce" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('panne') }}</span>
                                        <input type="text" required name="name" class="form-control" placeholder="Panne" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('description') }}</span>
                                        <input type="text" required name="name" class="form-control" placeholder="Description" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('dateCreation') }}</span>
                                        <input type="date" required name="name" class="form-control" placeholder="Date de création" />
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

