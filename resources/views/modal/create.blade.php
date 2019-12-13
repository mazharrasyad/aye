@extends('master')
@section('content')

<div class="main main-raised mt-4">
    <div class="container">
  
      <h3 class="mt-4">Modal Usaha</h3>

                                    <form action="/createmodal" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" value="">
                      </div>



                      <div class="form-group">
                       
                        <label for="jenis">Nama Validasi</label>
                          <select name="validasi_id" class="form-control">

                              <option value="">Pilih nama validasi</option>
                              @foreach($validasi as $validate)
                              <option value="{{$validate->id}}">{{$validate->pengajuanusaha_id}}</option>
                              @endforeach
                          </select>
                        
                      </div>


                      <div class="form-group">
                        <label for="name">Budget</label>
                          <input type="text" class="form-control" name="budget" value="">
                      
                      </div>

                      <div class="form-group">
                        <label for="name">Jumlah Saham</label>
                          <input type="text" class="form-control" name="jumlahsaham" value="">
                      
                      </div>
                      
                      <div class="form-group">
                        <label for="name">Harga Saham</label>
                          <input type="text" class="form-control" name="hargasaham" value="">
                      
                      </div>
                      
                      <div class="form-group">
                        <label for="name">Sisa Saham</label>
                        <input type="text" class="form-control" name="sisasaham" value="">
                      </div>

                      <div class="form-group">
                        <label for="name">Durasi</label>
                        <input type="text" class="form-control" name="durasijual" value="">
                      </div>

                        <div class="form-group">
                        <label for="name">R O I</label>
                        <input type="text" class="form-control" name="roi" value="">
                      </div>


                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>

    </div>
</div>

@endsection
