<div class="row">
    <div class="col-md-12">
        <div class="modal fade" id="activation-modal" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal1Label">{{ $titleItem ?? '' }}</h5>
                        <button type="button" class="btn btn-sm btn-label-danger btn-icon" data-bs-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-muted mb-0">Vous souhaitez <span id="body"></span> <b id="item-full-name"></b> ?</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="" id="activation-item-form">
                            @csrf
                            @method('PUT')
{{--                            <input type="hidden" name="id" id="activation-field-id">--}}
                            <input type="hidden" name="value" id="activation-field">
                            <button class="btn btn-default" type="button" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                            <button id="btn-form"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showActivationModal(itemId, itemName, body, itemLink, btn, value) {
        // Mettre à jour le texte du modal avec le nom de l'item
        btnInterm = btn.split(' ');
        document.getElementById('item-full-name').textContent = itemName;
        document.getElementById('body').textContent = body;
        document.getElementById('btn-form').className = 'btn ' + btnInterm[0];
        document.getElementById('btn-form').textContent = btnInterm[1];
        document.getElementById('activation-field').value = value;
        // document.getElementById('activation-field-id').value = itemId;
        // Mettre à jour l'URL du formulaire pour inclure l'ID de l'item
        let activationForm = document.getElementById('activation-item-form');
        activationForm.action = itemLink + itemId;
        // Afficher le modal
        let deleteModal = new bootstrap.Modal(document.getElementById('activation-modal'));
        deleteModal.show();
    }
</script>
