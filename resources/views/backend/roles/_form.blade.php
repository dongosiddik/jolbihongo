@csrf

<div class="card-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') ?? $role->name }}" required
            placeholder="Enter first name">
        @error('name')
            <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>

</div>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Save </button>
</div>
