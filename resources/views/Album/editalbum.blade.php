@extends('template.main')

@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Album</h1>
    </div>

    <form action="{{ route('updatealbum', $editalbum->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="judul">Nama Album</label>
            <input type="text" id="judul_album" name="judul_album" class="form-control" placeholder="Masukan Nama Album" value="{{ $editalbum->judul_album }}">
        </div>
     
        <div class="form-group">
            <label for="Deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Masukan Deskripsi Playlist">{{ $editalbum->deskripsi }}</textarea>
        </div>

        <a href="{{ url('dataalbum') }}" class="d-none d-sm-inline-block btn btn-md btn-secondary shadow-md"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i>Cancel
        </a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md"><i
            class="fas fa-plus fa-sm text-white-50"></i>Edit</button>
    </form>

</div>
@endsection