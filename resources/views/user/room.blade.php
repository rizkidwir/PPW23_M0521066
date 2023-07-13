@extends('user.layouts.main')

@section('container')
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Room</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Room</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid product py-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Rooms</p>
                <h1 class="display-6">Delivering your best room that's full of comfort</h1>
            </div>

            <table class="table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Price/night (Rupiah)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room )
                        <tr>
                            <td>{{ $room['type'] }}</td>
                            <td>{{ $room['price'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
    </div>
    <!-- Products End -->
@endsection
