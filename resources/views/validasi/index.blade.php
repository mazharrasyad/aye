@extends('master')
@section('content')



      	<a href="{{url('/createvalidasi')}}" class="btn btn-success">Create</a>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Legalitas</th>
      <th scope="col">Prospek</th>
      <th scope="col">Budget</th>
      <th scope="col">pengaju usaha</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($validasi as $validate)
    <tr>
      <th scope="row">1</th>
    
             <td>@if($validate->legalitas == '0')
                <a href="{{url('validate/legalitas/'.$validate->id)}}" class="btn btn-primary btn-sm">Belum</a>
                @else
                <a href="{{url('validate/legalitas/'.$validate->id)}}" class="btn btn-danger btn-sm ">Sudah</a>
                                                    
                                                    @endif
                                                </td>
      <td>@if($validate->prospek == '0')
                <a href="{{url('validate/prospek/'.$validate->id)}}" class="btn btn-primary btn-sm">Belum</a>
                @else
                <a href="{{url('validate/prospek/'.$validate->id)}}" class="btn btn-danger btn-sm ">Sudah</a>
                                                    
                                                    @endif
                                                </td>
      <td>@if($validate->budget == '0')
                <a href="{{url('validate/budget/'.$validate->id)}}" class="btn btn-primary btn-sm">Belum</a>
                @else
                <a href="{{url('validate/budget/'.$validate->id)}}" class="btn btn-danger btn-sm ">Sudah</a>
                                                    
                                                    @endif
                                                </td>
      <td>{{$validate->pengajuanusaha->nama}}</td>
      <td>

                                                    <form action="{{url('validasi/'.$validate->id.'/delete')}}" method="POST" enctype="multipart/form-data">
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