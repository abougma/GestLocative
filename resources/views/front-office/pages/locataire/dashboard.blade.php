@extends("back-office.layouts.main")
@section("body")

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Mon compte</h4>
                    <p class="text-muted mb-0">Ici vous pouvez voir toutes les informations de votre compte</p>
                </div>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paramètre</a></li>
                        <li class="breadcrumb-item active">Accueil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-bordered">
            <h3 class="card-title">Solde</h3>
        </div>
        <div class="card-body">
            <p class="text-muted mb-0">Bienvenue sur votre espace locataire ! Sur cette page, vous trouverez toutes les informations essentielles concernant le statut de votre compte et de vos paiements de loyer. Vous pourrez consulter votre solde actuel, accéder à l'historique de vos paiements, et visualiser les échéances à venir pour mieux planifier vos finances. Les détails de chaque transaction, y compris les références et les modes de paiement utilisés, sont également disponibles, vous offrant ainsi une vue d'ensemble claire et détaillée de votre situation financière. De plus, vous recevrez des confirmations instantanées pour chaque paiement effectué, assurant la transparence et la sécurité de vos transactions. Découvrez également les différentes méthodes de paiement disponibles et choisissez celle qui vous convient le mieux. Nous nous engageons à vous fournir un service transparent et efficace. Si vous avez des questions ou des préoccupations concernant votre compte ou vos paiements, n'hésitez pas à contacter notre équipe de support. Nous sommes là pour vous aider !</p>
        </div>
        <div class="card-footer card-footer-bordered">
            <button class="btn btn-primary">Voir detail du compte</button>
        </div>
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
                            <th>Nom</th>
                            <th>Date de création</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
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
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">Libellé</span>
                                        <input type="text" required name="name" class="form-control" placeholder="Catégorie" />
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
