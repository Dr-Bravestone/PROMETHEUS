@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header pb-0">
            <h6 class="text-center">Tabel Kategori</h6>
          </div>
          <div class="col-lg-12 p-2">
            <div class="text-end">
                <a href="{{route('kategori.create')}}" class="btn btn-icon btn-primary" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    <span class="btn-inner--text">Tambah</span>
                  </a>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" style="table-layout: fixed; width: 100%; word-wrap: break-word;">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                    <th class="text-secondary opacity-7 ms-2">Action</th>
                  </tr>
                </thead>
                {{-- <td class="align-middle">
                        <button class="btn btn-secondary" type="button">Edit</button>
                        <button class="btn btn-warning" type="button">Hapus</button>
                    </td> --}}
                <tbody>
                  @foreach ($kategori as $item)
                <tr>
                    <td class="text-xs">{{ $item['nama_kategori'] }}</td>
                    <td class="text-xxs" style="word-break: break-all">{{ $item['deskripsi'] }}</td>
                    <td>
                      <form action="{{route('kategori.destroy', $item->id)}}" method="POST">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-sm btn-danger btn-rounded show_confirm">
                        <i class="ni ni-fat-delete text-light text-sm opacity-10"></i>
                       </button>
                       <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-sm btn-warning btn-rounded">
                        <i class="ni ni-settings text-light text-sm opacity-10"></i></a>
                      </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Projects table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Spotify</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$2,500</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Invision</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$5,000</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">done</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Jira</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$3,400</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">canceled</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">30%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Slack</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$1,000</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">canceled</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">0%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Webdev</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$14,000</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">80%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Adobe XD</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$2,300</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">done</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection