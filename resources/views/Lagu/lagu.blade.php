@extends('template.main')

@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->

    <div class="container mb-4">
        <div class="d-sm-flex align-items-center justify-content-start mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Lagu</h1></div>
            <a href="{{ route('tambahlagu') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm justify-content-end"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah
                </a>
    </div>
    @if(!$dtlagu->isEmpty())
    <table class="table">
      <thead >
        <tr>
          <th scope="col">Judul</th>
          <th scope="col">Artis</th>
          <th scope="col">Gender</th>
          <th scope="col">Penulis</th>
          <th scope="col">Tahun</th>
          <th scope="col">File</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dtlagu as $item)
        <tr>
          <td>{{ $item->judul }}</td>
          <td>{{ $item->artist }}</td>
          <td>{{ $item->gender }}</td>
          <td>{{ $item->penulis }}</td>
          <td>{{ $item->tahun }}</td>
          <td><audio controls>
            <source src="" type="audio/mpeg">
            Browsermu tidak mendukung tag audio, upgrade donk!
          </audio></td>
          <td>
            <a href="{{ url('editlagu', $item->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-edit fa-sm text-white-50"></i> Edit
              </a>
              <a href="{{ url('hapuslagu', $item->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                  class="fas fa-trash fa-sm text-white-50"></i> Hapus
              </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
      <h2 class="h3 mb-0 text-gray-800">Data Lagu Kosong</h2></div>
    @endif
</div>
@endsection