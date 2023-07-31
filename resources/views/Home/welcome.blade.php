@extends('template.main')

@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="{{ route('datalagu') }}"><img class="d-block w-100" src="{{ asset('./template/img/lagu.jpg') }}" alt="First slide"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>List Lagu</h5>
                    <p>Kumpulan Lagu atau Musik yang Digunakan Hits Unikom Radio</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="{{ url('album') }}"><img class="d-block w-100" src="{{ asset('./template/img/album.jpg') }}" alt="Second slide"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>List Album</h5>
                    <p>Kumpulan Album Dari List Lagu yang Digunakan Hits Unikom Radio</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="{{ url('event') }}"><img class="d-block w-100" src="{{ asset('./template/img/acara.jpg') }}" alt="Third slide"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>List Acara atau Event</h5>
                    <p>Daftar Acara Dari Siaran Hits Unikom Radio</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>


</div>
@endsection
