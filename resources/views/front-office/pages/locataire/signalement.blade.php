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

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Signalement</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-categories">
                <i class="fa fa-plus-circle"></i> Ajouter
            </button>
        </div>

        <div class="card-body" style="max-height: 80vh; overflow-y: auto;">
            <div class="row">
                <!-- Carte 1 -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100 border-top border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Électricité - Compteur</h5>
                            <p><strong>Pièce:</strong> Salon</p>
                            <p><strong>Panne:</strong> Ne s'allume pas</p>
                            <p><strong>Description:</strong> Le compteur saute régulièrement.</p>
                            <p><strong>Date:</strong> 10/04/2025</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a class="btn btn-info btn-sm" href="#"><i class="fa fa-pen"></i> Modifier</a>
                            <button class="btn btn-danger btn-sm" onclick='showDeleteModal("#", "#", "#")'>
                                <i class="fa fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Barre de séparation -->
                <div class="col-12 mb-2">
                    <hr class="my-2 border border-secondary">
                </div>

                <!-- Carte 2 -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100 border-top border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Plomberie - Robinet</h5>
                            <p><strong>Pièce:</strong> Cuisine</p>
                            <p><strong>Panne:</strong> Fuite d'eau</p>
                            <p><strong>Description:</strong> Le robinet goutte en permanence.</p>
                            <p><strong>Date:</strong> 10/04/2025</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a class="btn btn-info btn-sm" href="#"><i class="fa fa-pen"></i> Modifier</a>
                            <button class="btn btn-danger btn-sm" onclick='showDeleteModal("#", "#", "#")'>
                                <i class="fa fa-trash"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Ajoute d'autres cartes ici -->
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

