@extends('admin.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="row">
      <div class="d-flex align-items-stretch">
        <div class="card" style="width: 100%;">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Active Guest</h5>
            <a href="addsuites">
            <button type="button" class="btn btn-primary">Add Active Guest</button>
            </a>
            <div class="table-responsive">
                <!-- Table -->
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No Kamar</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Type</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama Tamu</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">ID Number</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">ID Card</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Suites as $suite )
                        <tr>
                            <td>{{ $suite['no_kamar'] }}</td>
                            <td>{{ $suite['type'] }}</td>
                            <td>{{ $suite['nama_tamu'] }}</td>
                            <td>{{ $suite['id_number'] }}</td>
                            <td><img src="{{ asset('fotoktp/'.$suite->id_card) }}" alt="" class="w-36" style="width: 100px;"></td>
                            <td>
                                <a href="/showguest/{{$suite->id}}">
                                    <button type="button" class="btn btn-success">Edit</button>
                                </a>
                                <a href="/deleteguest/{{$suite->id}}">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- Table End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
