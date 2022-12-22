<div class="col-md-12 col-sm-12">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible">{!! session('success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        </div>
    @endif
    @if(session()->has('danger'))
        <div class="alert alert-warning alert-dismissible">{!! session('danger') !!}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        </div>
    @endif
</div>
