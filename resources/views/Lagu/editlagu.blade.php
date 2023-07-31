@extends('template.main')

@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Lagu</h1>
    </div>

    <form action="{{ route('updatelagu', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" value="{{ $edit->judul }}">
        </div>
     
        <div class="form-group">
            <label for="artis">Artis</label>
            <input type="text" id="artis" name="artis" class="form-control" value="{{ $edit->artist }}">
        </div>
     
        <div class="form-group">
            <label for="artis">Gender</label>
            <input type="text" id="gender" name="gender" class="form-control" value="{{ $edit->gender }}">
        </div>

        <div class="form-group">
            <label for="artis">Penulis</label>
            <input type="text" id="penulis" name="penulis" class="form-control" value="{{ $edit->penulis }}">
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" id="tahun" name="tahun" class="form-control" value="{{ $edit->tahun }}">
        </div>

        
     
        <a href="{{ url('datalagu') }}" class="d-none d-sm-inline-block btn btn-md btn-secondary shadow-md"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i>Cancel
        </a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md"><i
            class="fas fa-plus fa-sm text-white-50"></i>Edit</button>
    </form>

</div>
@endsection