@csrf

<div class="card-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') ?? $user->name }}" required
            placeholder="Enter first name">
        @error('first_name')
            <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') ?? $user->email }}" required
            placeholder="Enter email">
        @error('email')
            <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        @error('email')
            <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <select name="role_id" id="" class="form-control"> 
            <option value="" selected>Select role</option>
            @foreach ($roles as $item)
            <option value="{{$item->id}}" selected>{{$item->name}}</option>
                
            @endforeach
        </select>
        @error('email')
            <small class="text-danger"> {{ $message }} </small>
        @enderror
    </div>
</div>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Save </button>
</div>
