@extends('template.main')

@section('container')
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{ route('simpanitem') }}" method="POST">
    {{ csrf_field() }}
    <div class="container mb-4">
        <div class="d-sm-flex align-items-center justify-content-start mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Lagu</h1></div>
                <button type="submit" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah</button>
    </div>
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tambahitem" name="tambahitem">
                    <label class="form-check-label" for="flexCheckDefault">
                      Tambahkan
                    </label>
                  </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
</div>
@endsection