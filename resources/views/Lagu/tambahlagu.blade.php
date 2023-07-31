@extends('template.main')

@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Lagu</h1>
    </div>

    <form action="{{ route('simpanlagu') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukan Judul Lagu">
        </div>
     
        <div class="form-group">
            <label for="artis">Artis</label>
            <input type="text" id="artis" name="artis" class="form-control" placeholder="Masukan Artis / Penyanyi">
        </div>
     
        <div class="form-group">
            <label for="artis">Gender</label>
            <input type="text" id="gender" name="gender" class="form-control" placeholder="Masukan Gender">
        </div>

        <div class="form-group">
            <label for="artis">Penulis</label>
            <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Masukan Penulis">
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" id="tahun" name="tahun" class="form-control">
        </div>

        <div class="form-group">
            <label for="tahun">File</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>

        <div class="form-group">
            <label for="tahun">Album</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="id_album" name="id_album">
                <option selected>Pilih Album</option>
                @foreach ($dtalbum as $item)
                <option value="{{ $item->id }}">{{ $item->judul_album }}</option>
                @endforeach
              </select>
        </div>
     
        <a href="{{ route('datalagu') }}" class="d-none d-sm-inline-block btn btn-md btn-secondary shadow-md"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i> Cancel
        </a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah</button>
    </form>

</div>
@endsection