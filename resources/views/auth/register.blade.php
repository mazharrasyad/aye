@extends('master')

@section('content')
<div class="main main-raised mt-auto">
<div class="container">
    <div class="row">

        <div class="col-md-6 mt-4">
                <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-primary">
                    <b>Nasabah</b>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">Ini deskripsi</p>
                    <a href="{{ url('/registernasabah') }}" class="btn btn-primary">Daftar</a>
                </div>
                </div>
        </div>

        <div class="col-md-6 mt-4">
                <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-primary">
                    <b>Investor</b>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">Ini deskripsi</p>
                    <a href="{{ url('/registerinvestor') }}" class="btn btn-primary">Daftar</a>
                </div>
                </div>
        </div>

    </div>
</div>
</div>
@endsection
