@extends('admin.layouts.main')

@section('container')
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title fw-semibold mb-4">Edit Active Guest</h5>
                <a href="/helloadmin">
                        <button type="submit" class="btn btn-primary">Back</button>
                </a>
              <div class="card">
                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="no_kamar" class="form-label">Nomor Kamar</label>
                        <input type="text" id="no_kamar" name="no_kamar" class="form-control" value="{{$data->no_kamar}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" id="type" name="type">
                            <option selected>{{$data->type}}</option>
                            <option value="gold">Platinum</option>
                            <option value="platinum">Gold</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_tamu" class="form-label">Nama Tamu</label>
                        <input type="text" id="nama_tamu" name="nama_tamu" class="form-control" value="{{$data->nama_tamu}}">
                    </div>
                    <div class="mb-3">
                      <label for="id_number" class="form-label">ID NUMBER</label>
                      <input type="text" id="id_number" name="id_number" class="form-control" value="{{$data->id_number}}">
                    </div>
                    <div class="mb-3">
                        <label for="id_card" class="form-label">ID CARD</label>
                        @if($data->id_card)
                        <img src="{{ asset('fotoktp/'.$data->id_card) }}" class="img-preview img-fluid d-block" style="Width: 300px;">
                        @else
                        <img class="img-preview img-fluid"  style="width: 100px">
                        @endif
                        <input class="form-control" id="id_card" name="id_card" type="file" accept="image/png, image/gif, image/jpeg" onchange="previewImage()" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
