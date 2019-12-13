@extends('master')
@section('content')




   <form action="/createusaha" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama Usaha" value="">
                      </div>
                      <div class="form-group">
                        <label for="name">Foto</label>
                        <input type="file" class="form-control" name="foto" value="">
                      </div>


                      <div class="form-group">
                       
                        <label for="jenis">hargamodal</label>
                          <select name="modal_id" class="form-control">

                              <option value="">Pilih na,a validasi</option>
                              @foreach($modal as $modalku)
                              <option value="{{$modalku->id}}">{{$modalku->id}}</option>
                              @endforeach
                          </select>
                        
                      </div>


                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>


@endsection
