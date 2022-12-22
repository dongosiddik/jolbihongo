<div class="modal fade" id="{!!$idModal!!}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit  role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route("roles.update", $role)}} " method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @include('backend.roles._form')
                </form>
            </div>
        </div>
    </div>
