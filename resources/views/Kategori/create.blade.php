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
    <form>
      <div class="form-group">
          <label for="example-text-input" class="form-control-label">Text</label>
          <input class="form-control" type="text" value="John Snow" id="example-text-input">
      </div>
      <div class="form-group">
          <label for="example-search-input" class="form-control-label">Search</label>
          <input class="form-control" type="search" value="Tell me your secret ..." id="example-search-input">
      </div>
      <div class="form-group">
          <label for="example-email-input" class="form-control-label">Email</label>
          <input class="form-control" type="email" value="argon@example.com" id="example-email-input">
      </div>
      <div class="form-group">
          <label for="example-url-input" class="form-control-label">URL</label>
          <input class="form-control" type="url" value="https://www.creative-tim.com" id="example-url-input">
      </div>
      <div class="form-group">
          <label for="example-tel-input" class="form-control-label">Phone</label>
          <input class="form-control" type="tel" value="40-(770)-888-444" id="example-tel-input">
      </div>
      <div class="form-group">
          <label for="example-password-input" class="form-control-label">Password</label>
          <input class="form-control" type="password" value="password" id="example-password-input">
      </div>
      <div class="form-group">
          <label for="example-number-input" class="form-control-label">Number</label>
          <input class="form-control" type="number" value="23" id="example-number-input">
      </div>
      
      <div class="form-group">
          <label for="example-date-input" class="form-control-label">Date</label>
          <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
      </div>
      
      
      <div class="form-group">
          <label for="example-color-input" class="form-control-label">Color</label>
          <input class="form-control" type="color" value="#5e72e4" id="example-color-input">
      </div>
      <div class="text-center">
        <button type="button" class="btn bg-gradient-dark w-25 my-4 mb-2">Daftar</button>
        <button type="button" class="btn btn-danger w-14 my-4 mb-2 text-light">Batal</button>
      </div>
  </form>
  </div>
</div>
@endsection