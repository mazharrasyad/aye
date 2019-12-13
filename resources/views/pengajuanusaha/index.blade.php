@extends('master')
@section('content')



      	<a href="{{url('/createpengajuanusaha')}}" class="btn btn-success">Create</a>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
      <th scope="col">budget</th>
      <th scope="col">Durasi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($pengajuanusaha as $usaha)
    <tr>
      <th scope="row">1</th>
      <td>{{$usaha->nama}}</td>

      <td>{{$usaha->jenis_id}}</td>
      <td>{{$usaha->deskripsi}}</td>
      <td>{{$usaha->alamat}}</td>
      <td><img src="{{asset('usaha/'.$usaha->foto)}}" widht="100px" height="100px" alt=""></td>
      <td>{{$usaha->budget}}</td>
      <td>{{$usaha->durasi}}<span>Bulan</span></td>
      
      <td>
      	<a href="" class="btn btn-success">update</a>

                                                    <form action="{{url('pengajuanusaha/'.$usaha->id.'/delete')}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}        
                                                   
                                      <input type="submit" name="" value="DELETE" class="btn btn-danger btn-xs"  onclick="return confirm('yakin mau dihapus.?')">
                                                    </form>  

      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection