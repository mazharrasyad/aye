@extends('master')

@section('content')

<div class="main main-raised mt-4">
    <div class="container">
  
      <h3 class="mt-4">Usaha</h3>

    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                      
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                      </div>

                      <div class="form-group">
                        <label>Usaha</label>
                        <select class="form-control" name="usaha_id" id="usaha_id">
                            <option value="" disabled>Pilih Usaha</option>
                          @foreach ($usaha as $usahanya)
                            <option value="{{ $usahanya->id }}">{{ $usahanya->nama }}</option>
                          @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                        <input type="date" class="form-control" name="tanggal_transaksi" value="">
                          </div>

                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>
    </div>
</div>

@endsection
