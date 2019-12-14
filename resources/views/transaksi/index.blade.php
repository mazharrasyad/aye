@extends('master')

@section('content')

<div class="main main-raised mt-4">
  <div class="container">

  <a href="{{ route('transaksi.create') }}" class="btn btn-success mt-4">Create</a>

  <table class="table mt-4">
    <thead class="">
      <tr>
        <th scope="col">No</th>
        <th scope="col">User</th>
        <th scope="col">Usaha</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach($transaksi as $transaksinya)
      <tr>
        <th scope="row">1</th>
        <td>{{ $transaksinya -> user -> name }}</td>
        <td>{{ $transaksinya -> usaha -> nama }}</td>
        <td>{{ $transaksinya -> tanggal_transaksi }}</td>
      </tr>
      @endforeach
    </tbody>
    </table>

  </div>
</div>

@endsection