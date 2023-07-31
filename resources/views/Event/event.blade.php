@extends('template.main')

@section('container')
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Acara Siaran</h1>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Acara</th>
            <th scope="col">Mulai</th>
            <th scope="col">Selesai</th>
            <th scope="col">Tanggal Selesai</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>

</div>
@endsection