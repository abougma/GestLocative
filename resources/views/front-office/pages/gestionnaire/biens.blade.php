@extends("back-office.layouts.main")
@section("body")
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Mes biens</h4>
                    <p class="text-muted mb-0">{{ __('messageBiens') }}</p>
                </div>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paramètre</a></li>
                        <li class="breadcrumb-item active">Biens</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Biens</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-categories">
                <i class="fa fa-plus-circle"></i> Ajouter
            </button>
        </div>

        <div class="card-body" style="max-height: 80vh; overflow-y: auto;">
            <div class="row">

                <!-- Ajout d'un biens -->
                <div class="card-body" style="max-height: 80vh; overflow-y: auto;">
                    <div class="row">
                        @foreach ($biens as $bien)
                            <!-- Carte de chaque bien -->
                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="card h-100 border-top border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $bien->titre }}</h5>
                                        <p><strong>Description:</strong> {{ $bien->description }}</p>
                                        <p><strong>Adresse:</strong> {{ $bien->adresse }}</p>
                                        <p><strong>Prix:</strong> {{ $bien->prix }} FCFA</p>
                                        <p><strong>Date:</strong> {{ $bien->created_at->format('d/m/Y') }}</p>

                                    </div>
                                    <div class="card-footer d-flex justify-content-between">
                                        <a class="btn btn-info btn-sm" href="#"><i class="fa fa-pen"></i> Voir</a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteUrl('{{ route('gestionnaire.bien.delete', $bien->id) }}')">
                                            <i class="fa fa-trash"></i> Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Barre de séparation -->
                            <div class="col-12 mb-2">
                                <hr class="my-2 border border-secondary">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer cet élément ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Modal 5 -->
            <div class="modal fade" id="add-categories">
                <div class="modal-dialog modal-dialog-scrollable">
                    <form action="{{ route('gestionnaire.biens.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter un bien</h5>
                                <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal">
                                    <i class="mdi mdi-close"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('titre') }}</span>
                                        <input type="text" required name="titre" class="form-control" placeholder="Titre" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('description') }}</span>
                                        <input type="text" required name="description" class="form-control" placeholder="Description" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group">
                                        <label class="input-group-text" for="typeSelect">{{ __('type') }}</label>
                                        <select required name="type" id="typeSelect" class="form-select">
                                            <option value="">-- Sélectionner un type --</option>
                                            <option value="location">Location</option>
                                            <option value="achat">Achat</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('adresseChamps') }}</span>
                                        <input type="text" required name="adresse" class="form-control" placeholder="Adresse" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('prix') }}</span>
                                        <input type="text" required name="prix" class="form-control" placeholder="Prix" />
                                    </div>
                                </div>
                                <div class="d-grid gap-3">
                                    <div class="input-group"><span class="input-group-text" id="basic-addon1">{{ __('images') }}</span>
                                        <input type="file" required name="image[]" class="form-control" placeholder="Images" id="image" multiple />
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

    <script>
        function setDeleteUrl(url) {
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
            confirmDeleteBtn.onclick = function() {
                window.location.href = url;  // Redirige vers l'URL de suppression
            };
        }

        if (document.getElementById('success-alert')) {
            // Ferme l'alerte après 5 secondes (5000 ms)
            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 5000);
        }
    </script>
@endsection
