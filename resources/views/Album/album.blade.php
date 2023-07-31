
@extends('template.main')

@section('container')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <div class="container mb-4">
        <div class="d-sm-flex align-items-center justify-content-start mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Album</h1></div>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm justify-content-end" data-toggle="modal" data-target="#modalTambahAlbum"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah
                </a>
    </div>

    <!-- Modal -->
<div class="modal fade" id="modalTambahAlbum" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Album</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('simpanalbum') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="judul">Nama Album</label>
            <input type="text" id="judul_album" name="judul_album" class="form-control" placeholder="Masukan Nama Album" required>
          </div>
       
          <div class="form-group">
              <label for="Deskripsi">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Masukan Deskripsi Album"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md"><i
              class="fas fa-plus fa-sm text-white-50"></i> Tambah</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

@if(!$dtalbum->isEmpty())
<div class="card-deck mb-5">
  @foreach($dtalbum as $item)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('./template/img/musik.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $item->judul_album }}</h5>
          <p class="card-text">{{ $item->deskripsi }}</p>
          <a href="{{ route('detailalbum',$item->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-eye fa-sm text-white-50"></i> Lihat
          </a>
          <a href="{{ route('edit',$item->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-edit fa-sm text-white-50" data-toggle="modal" data-target="#modalEditPlaylist"></i> Edit
          </a>
          <a href="{{ url('hapusalbum',$item->id) }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
            class="fas fa-trash fa-sm text-white-50"></i> hapus
          </a>
        </div>
    </div>
    @endforeach
</div>
@else
<div class="d-sm-flex align-items-center justify-content-start mb-4">
  <h2 class="h3 mb-0 text-gray-800">Data Album Kosong</h2></div>
@endif
</div>
@endsection