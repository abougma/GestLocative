<div class="row">
    <div class="col-md-12">
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal1Label">Suppression {{ $titleItem ?? '' }}</h5>
                        <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted mb-0">Vous souhaitez supprimer <b id="item-name"></b> ?</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="" id="delete-item-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-default" type="button" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                            <button class="btn btn-outline-danger"><i class="fa fa-trash"></i> Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showDeleteModal(itemId, itemName, itemLink) {
        // Mettre à jour le texte du modal avec le nom de l'item
        document.getElementById('item-name').textContent = itemName;
        // Mettre à jour l'URL du formulaire pour inclure l'ID de l'item
        let deleteForm = document.getElementById('delete-item-form');
        deleteForm.action = itemLink + itemId;
        // Afficher le modal
        let deleteModal = new bootstrap.Modal(document.getElementById('delete-modal'));
        deleteModal.show();
    }
</script>
