@extends('template.main')

@section('container')
    <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="jumbotron">
        <h1 class="display-4">Playlist {{ $detail->judul_playlist }}</h1>
        <p class="lead">66 Lagu</p>
        <hr class="my-4">
        <p>List Lagu Playlist</p>
        <p class="lead">
            <a href="{{ route('playlistitem', $detail->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>Tambah
              </a>
        </p>
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
            @foreach ($detail as $item)
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><audio controls>
                <source src="" type="audio/mpeg">
                Browsermu tidak mendukung tag audio, upgrade donk!
              </audio></td>
              <td><a href="" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                class="fas fa-trash fa-sm text-white-50"></i> hapus</td>
            </tr>
            @endforeach
          </tbody>
          </table>
    
    </div>
</div>
@endsection