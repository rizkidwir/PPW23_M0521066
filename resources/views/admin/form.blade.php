@extends('admin.layouts.main')

@section('container')
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Active Guest</h5>
              <div class="card">
                <a href="/helloadmin">
                    <button type="submit" class="btn btn-primary">Back</button>
                </a>
                <div class="card-body">
                  <form action="{{ route('addguest') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="no_kamar" class="form-label">Nomor Kamar</label>
                        <input type="text" id="no_kamar" name="no_kamar" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" id="type" name="type">
                            <option selected>Choose Selected Package</option>
                            <option value="gold">Platinum</option>
                            <option value="platinum">Gold</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_tamu" class="form-label">Nama Tamu</label>
                        <input type="text" id="nama_tamu" name="nama_tamu" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label for="id_number" class="form-label">ID NUMBER</label>
                      <input type="text" id="id_number" name="id_number" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="id_card" class="form-label">ID CARD</label>
                        <input class="form-control" id="id_card" name="id_card" type="file" accept="image/png, image/gif, image/jpeg">
                    </div>
                    <div class="mb-3">
                        <img class="img-preview img-fluid"  style="width: 100px">
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
