@extends('master')
@section('content')



        <a href="{{url('/createpengajuanusaha')}}" class="btn btn-success">Create</a>

                                    <form action="/createpengajuanusaha" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama pengajuan usaha" value="">
                      </div>



                      <div class="form-group">
                       
                        <label for="jenis">Jenis</label>
                          <select name="jenis_id" class="form-control">

                              <option value="">Pilih Jenis</option>
                              @foreach($jenis as $jenis)
                              <label>pengajuan usaha</label>
                              <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                              @endforeach
                          </select>
                        
                      </div>


                      <div class="form-group">
                        <label for="name">Deskripsi</label>
                        <textarea name="deskripsi"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="name">Alamat</label>
                        <textarea name="alamat"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="file" class="form-control" name="foto"  value="">
                      </div>

                      <div class="form-group">
                        <label for="name">Budget</label>
                        <input type="text" class="form-control" name="budget" placeholder="Masukan budget..." value="">
                      </div>

                      <div class="form-group">
                        <label for="name">Durasi</label>
                        <input type="text" class="form-control" name="durasi" placeholder="Masukan durasi..." value="">
                      </div>


                      <div class="form-group">
                       
                        <label for="jenis">User</label>
                          <select name="user_id" class="form-control">
                              @foreach($user as $users)
                              <label>pengajuan usaha</label>
                              <option value="">Pilih Category</option>}
                              <option value="{{$users->id}}">{{$users->name}}</option>
                              @endforeach
                          </select>
                        
                      </div>




                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>



@endsection
