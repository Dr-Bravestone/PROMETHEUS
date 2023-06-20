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
  <div class="row">
    <form class="card">
      <div class="form-group">
          <label for="example-text-input" class="form-control-label">Nama</label>
          <input class="form-control" type="text" placeholder="nama lengkap" id="example-text-input">
      </div>
      <div class="custom-control custom-radio custom-control-inline border rounded-2 p-1">
        <label for="example-text-input" class="form-control-label">Jenis Kelamin</label><br>
        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
        <label class="text-dark" for="customRadioInline1">Pria</label>
        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
        <label class="text-dark" for="customRadioInline2">Wanita</label>
      </div>
      <div class="form-group">
          <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
          <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
        <label for="exampleFormControlSelect1">Divisi</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option disabled selected>--PILIH--</option>
          <option>Penjualan</option>
          <option>Pemasaran</option>
          <option>Keuangan</option>
          <option>Operasi</option>
          <option>Penelitian dan Pengembangan</option>
        </select>
          
        </div>
        <div class="col-lg-6">
          <label for="exampleFormControlSelect1">Jabatan</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option disabled selected>--PILIH--</option>
            <option>Staf</option>
            <option>Manajerial tingkat rendah</option>
            <option>Manajerial tingkat menengah</option>
            <option>Manajerial tingkat Tinggi</option>
            <option>Eksekutif</option>
            <option>Direksi</option>
          </select>
        </div>
      </div>
      
      {{-- <div class="form-group col-lg-3">
        <label for="exampleFormControlSelect1">Jabatan</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option disabled selected>--PILIH--</option>
          <option>Staf</option>
          <option>Manajerial tingkat rendah</option>
          <option>Manajerial tingkat menengah</option>
          <option>Manajerial tingkat Tinggi</option>
          <option>Eksekutif</option>
          <option>Direksi</option>
        </select>
      </div> --}}
      <div class="form-group col-lg-4">
            <label for="kategori_id">Kategori</label>
            <select class="form-control" name="kategori_id">
              <option disabled selected>--PILIH--</option>
              @foreach($kategori as $item)
                <option value="{{$item->id}}">{{$item->nama_Kategori}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="form-group">
          <label for="example-tel-input" class="form-control-label">No. Telp</label>
          <input class="form-control" type="tel" placeholder="+62..." id="example-tel-input">
      </div>
      
      <div class="text-center">
        <button type="button" class="btn bg-gradient-dark w-25 my-4 mb-2">Simpan</button>
        <button type="button" class="btn btn-danger w-14 my-4 mb-2 text-light">Batal</button>
      </div>
  </form>
  </div>
</div>
@endsection