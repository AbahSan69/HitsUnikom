@extends('template.main')

@section('container')
    <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="jumbotron">
      @csrf
        <h1 class="display-4">Album {{ $detail->judul_album }}</h1>
        <p class="lead">Lagu</p>
        <hr class="my-4">
        <p>List Lagu Album</p>
        <table class="table">
            <thead >
              <tr>
                <th scope="col">Judul</th>
                <th scope="col">Artis</th>
                <th scope="col">Gender</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun</th>
                <th scope="col">File</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($lagu as $item)
              <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->artist }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->tahun }}</td>
                <td><audio controls>
                  <source src="{{ Storage::disk('s3')->get('lagu/Kopi Lambada _ Reggae Version.mp3'); }}" type="audio/mpeg">
                  Browsermu tidak mendukung tag audio, upgrade donk!
                </audio></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    
    </div>
</div>
@endsection