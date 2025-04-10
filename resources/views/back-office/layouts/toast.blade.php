@if(Session::has('msg'))
    <div class="position-fixed top-0 end-0 p-3 bg-label-primary" style="z-index: 1111">
        <div id="liveToast" class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
            <div class="toast-header  {{ Session::get('bg-header-color') }}">
                <strong class="me-auto">Eco Infra</strong>
                <small class="text-muted"> {{ Session::get('title') }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body {{ Session::get('bg-body-color') }}">
                {{ Session::get('msg') }}
            </div>
        </div>
    </div>
@endif
