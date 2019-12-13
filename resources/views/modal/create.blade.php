@extends('master')
@section('content')



        <a href="{{url('/createmodal')}}" class="btn btn-success">Create</a>

                                    <form action="/createmodal" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama pengajuan usaha" value="">
                      </div>



                      <div class="form-group">
                       
                        <label for="jenis">Nama Validasi</label>
                          <select name="validasi_id" class="form-control">

                              <option value="">Pilih na,a validasi</option>
                              @foreach($validasi as $validate)
                              <option value="{{$validate->id}}">{{$validate->pengajuanusaha_id}}</option>
                              @endforeach
                          </select>
                        
                      </div>


                      <div class="form-group">
                        <label for="name">Budget</label>
                          <input type="text" class="form-control" name="budget" placeholder="Masukan budget..." value="">
                      
                      </div>

                      <div class="form-group">
                        <label for="name">Jumlah Saham</label>
                          <input type="text" class="form-control" name="jumlahsaham" placeholder="Masukan jumlah saham ..." value="">
                      
                      </div>
                      
                      <div class="form-group">
                        <label for="name">Harga Saham</label>
                          <input type="text" class="form-control" name="hargasaham" placeholder="Masukan harga saham ..." value="">
                      
                      </div>
                      
                      <div class="form-group">
                        <label for="name">Sisa Saham</label>
                        <input type="text" class="form-control" name="sisasaham" placeholder="Masukan sisa saham ..." value="">
                      </div>

                      <div class="form-group">
                        <label for="name">Durasi</label>
                        <input type="text" class="form-control" name="durasijual" placeholder="Masukan durasi..." value="">
                      </div>

                        <div class="form-group">
                        <label for="name">R O I</label>
                        <input type="text" class="form-control" name="roi" placeholder="Masukan R O I..." value="">
                      </div>


                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>



@endsection
