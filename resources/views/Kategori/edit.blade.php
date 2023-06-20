@extends('layout.main')
@section('judul_halaman', 'Halaman Kategori')

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-lg-12 text-white text-center">
          <h4>Tambah Kategori</h4>
      </div>
  </div>
  {{-- <div class="row col-lg-12">
    <div class="card">
      <div class="card-header pb-0 px-3">
        <h6 class="mb-0">Billing Information</h6>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column">
              <h6 class="mb-3 text-sm" id="watchlistName1"></h6>
              <span class="mb-2 text-xs">Film Name: <span class="text-dark font-weight-bold ms-sm-2" id="filmName1"></span></span>
              <span class="mb-2 text-xs">Created At: <span class="text-dark ms-sm-2 font-weight-bold" id="createdAt1"></span></span>
              <span class="text-xs">Inputted By: <span class="text-dark ms-sm-2 font-weight-bold" id="inputtedBy1"></span></span>
            </div>
            <div class="ms-auto text-end">
              <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
              <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
            </div>
          </li>
          <!-- Add more list items for additional Watchlist information here -->
        </ul>
      </div>
    </div>
    
  </div> --}}
  <div class="row mt-4">
    <form class="card" action="{{route('kategori.edit', $kategori->id)}}" method="POST">
      @csrf
      <div class="form-group">
          <label for="example-text-input" class="form-control-label">Nama Kategori</label>
          <input class="form-control" type="text" name="nama_kategori" placeholder="Nama Kategori" value="{{$kategori->nama_kategori}}">
          @error('nama_kategori')
                <span class="text-danger">{{message}}</span>
          @enderror
        </div>
      <div class="form-group">
        <label for="example-text-input" class="form-control-label">Deskripsi</label>
        <input class="form-control" type="text" name="deskripsi" placeholder="deskripsi Kategoro" value="{{$kategori->deskripsi}}">
        @error('deskripsi')
                <span class="text-danger">{{message}}</span>
        @enderror
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn bg-gradient-dark w-25 my-4 mb-2">Update</button>
        <button type="button" class="btn btn-danger w-14 my-4 mb-2 text-light">Batal</button>
      </div>
  </form>
  </div>
</div>
@endsection