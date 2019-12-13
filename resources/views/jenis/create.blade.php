@extends('master')
@section('content')




   <form action="/createjenis" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama jenis" value="">
                      </div>



                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>


@endsection
