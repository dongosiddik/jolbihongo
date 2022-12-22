<div class="modal fade" id="{!!$idModal!!}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User information</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route("users.update", $user)}} " method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('backend.users._form', [
                        'btnTexte' => 'Modifier',
                        'btnCancel' => 'Annuler',
                    ])
                </form>
            </div>
        </div>
    </div>
