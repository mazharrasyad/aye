@extends('master')
@section('content')

<div class="main main-raised mt-4">
    <div class="container">
  

      	<a href="{{url('/createjenis')}}" class="btn btn-success mt-4">Create</a>

	<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($jenisnya as $jenis)
    <tr>
      <th scope="row">1</th>
      <td>{{$jenis->nama}}</td>
      <td>

      	<a href="" class="btn btn-success">update</a></td>
      <td>
        <form class="" action="{{url('jenis/'.$jenis->id.'/delete')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('DELETE')}}        
        <input type="submit" name="" value="DELETE" class="btn btn-danger btn-xs"  onclick="return confirm('yakin mau dihapus.?')">
        </form>  

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>

@endsection