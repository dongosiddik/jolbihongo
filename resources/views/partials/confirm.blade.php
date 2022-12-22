<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="demo-form2" method="POST" action="{{$route}}">

                <!-- Modal body -->
                <div class="modal-body text-center mb-5">
                    {{-- <img src="right.png" class="img-responsive"> --}}
                    <h1>Are You Sure?</h1>
                    <p>Do you really want to delete these records? </p>
                    <br><br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary  mr-2 rounded-lg"
                            data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger  rounded-lg" >Delete</button>
                    </div>
                </div>
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</div>
