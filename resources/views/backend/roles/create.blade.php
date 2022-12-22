

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @include('backend.roles._form')
                </form>
            </div>
        </div>
    </div>
