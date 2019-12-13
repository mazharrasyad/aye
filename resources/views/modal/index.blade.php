@extends('master')
@section('content')



      	<a href="{{url('/createjenis')}}" class="btn btn-success">Create</a>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Validasi</th>

      <th scope="col">Budget</th>
      <th scope="col">Jumlah saham</th>
      <th scope="col">Harga saham</th>
      <th scope="col">Sisa saham </th>
      <th scope="col">Durasi Jual</th>
      <th scope="col">ROI</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($modal as $modalnya)
    <tr>
      <th scope="row">1</th>
      <td>{{$modalnya->validasi_id}}</td>

      <td>{{$modalnya->budget}}</td>
      <td>{{$modalnya->jumlahsaham}}</td>
      <td>{{$modalnya->hargasaham}}</td>
      <td>{{$modalnya->sisasaham}}</td>
      <td>{{$modalnya->durasijual}}</td>
      <td>{{$modalnya->roi}}</td>
      <td>
      	<a href="" class="btn btn-success">update</a>

                                                    <form action="{{url('modal/'.$modalnya->id.'/delete')}}" method="POST" enctype="multipart/form-data">
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