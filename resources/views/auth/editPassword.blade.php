<div class="modal fade" id="editPassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h4 class="modal-title">Default Modal</h4> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-box">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            {{-- <a href="#" class="h1"><b>Admin</b>LTE</a> --}}
                        </div>
                        <div class="card-body">
                           
                            <form method="POST" action="{{ route('change.password') }}">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="password" name="current_password" class="form-control" placeholder="Current Password" autocomplete="current-password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                @error('current_password')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror

                                <div class="input-group mb-3">
                                    <input type="password" name="new_password" class="form-control" placeholder="New Password" required>
                                    
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                @error('new_password')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                                <div class="input-group mb-3">
                                    <input type="password" name="new_confirm_password" class="form-control"
                                        placeholder="New Confirm Password" required>
                                       
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password_confirm')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Change
                                            password</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>

            </div>
            {{-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
