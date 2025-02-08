<div class="modal fade" id="modal_{{ $id ?? '' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password Confirmation!</h5>
            </div>
            <div class="modal-body">
                {{ $body ?? '' }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="{{ $route ?? '#' }}" class="btn btn-primary px-5">Reset</a>
            </div>
        </div>
    </div>
</div>
