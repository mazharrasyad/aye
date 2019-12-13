@extends('master')
@section('content')

<div class="main main-raised mt-4">
  <div class="container">

    <h3 class="mt-4">Jenis</h3>

   <form action="/createjenis" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="nama" value="">
                      </div>



                      <div class="modal-footer">
                      <a href="{{ url('/jenis')}}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>
  </div>
</div>

@endsection
