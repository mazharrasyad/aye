@extends('master')
@section('content')

<div class="main main-raised mt-4">
    <div class="container">
  
      <h3 class="mt-4">Pengajuan Usaha</h3>

                      <form action="/createpengajuanusaha" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="name">Nama Pengajuan Usaha</label>
                        <input type="text" class="form-control" name="nama" value="">
                      </div>



                      <div class="form-group">
                       
                        <label for="jenis">Jenis</label>
                          <select name="jenis_id" class="form-control">

                              <option value="" disabled>Pilih Jenis</option>
                              @foreach($jenis as $jenis)
                              <label>pengajuan usaha</label>
                              <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                              @endforeach
                          </select>
                        
                      </div>


                      <div class="form-group">
                        <label for="name">Deskripsi</label>
                        <textarea class="col-md-12" name="deskripsi"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="name">Alamat</label>
                        <textarea class="col-md-12" name="alamat"></textarea>
                      </div>

                      <div>
                        <label for="name">Foto Usaha</label>
                            <input type="file" name="foto" />
                      </div>

                      <div class="form-group mt-4">
                        <label for="name">Pengajuan Modal</label>
                        <input type="text" class="form-control" name="budget" value="">
                      </div>

                      <div class="form-group">
                        <label for="name">Durasi</label>
                        <select class="form-control" name="durasi" id="durasi">
                          <option value="" disabled>Pilih Durasi</option>
                          <option value="3">3 Bulan</option>
                          <option value="3">6 Bulan</option>
                          <option value="3">9 Bulan</option>
                          <option value="3">12 Bulan</option>
                        </select>
                      </div>


                      <div class="form-group">
                       
                        <label for="jenis">User</label>
                          <select name="user_id" class="form-control">
                              <option value="" disabled>Pilih User</option>
                              @foreach($user as $users)
                              <label>pengajuan usaha</label>                              
                              <option value="{{$users->id}}">{{$users->name}}</option>
                              @endforeach
                          </select>
                        
                      </div>




                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>

                  </div>
                </div>

@endsection
