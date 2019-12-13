@extends('master')
@section('content')



      	<a href="{{url('/createjenis')}}" class="btn btn-success">Create</a>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($jenisnya as $jenis)
    <tr>
      <th scope="row">1</th>
      <td>{{$jenis->nama}}</td>
      <td>
      	<a href="" class="btn btn-success">update</a>

      	<a href="" class="btn btn-danger">update</a>


      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection