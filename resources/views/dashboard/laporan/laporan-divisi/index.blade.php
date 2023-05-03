@extends('dashboard.layouts.main')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">LAPORAN</div>
    </div>
    
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <a href="/dashboard/laporan-divisi/qc-in" style="text-decoration: none">
                <div class="card">
                  <div class="card-body bg-light">
                      <h1 class="card-title" style="text-align: center">
                          <i data-feather="user" style="width:75px; height: 75px"></i>
                          QC IN
                      </h1>
                  </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="/dashboard/laporan-divisi/qc-lane" style="text-decoration: none">
                <div class="card">
                  <div class="card-body bg-light">
                      <h1 class="card-title" style="text-align: center">
                          <i data-feather="users" style="width:75px; height: 75px"></i>
                          QC LANE
                      </h1>
                  </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 mt-3">
            <a href="/dashboard/laporan-divisi/rtrw" style="text-decoration: none">
                <div class="card">
                  <div class="card-body bg-light">
                      <h1 class="card-title" style="text-align: center">
                          <i data-feather="pocket" style="width:75px; height: 75px"></i>
                          RTRW
                      </h1>
                  </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 mt-3">
            <a href="/dashboard/laporan-divisi/loading-zone" style="text-decoration: none">
                <div class="card">
                  <div class="card-body bg-light">
                      <h1 class="card-title" style="text-align: center">
                          <i data-feather="folder-plus" style="width:75px; height: 75px"></i>
                          LOADING ZONE
                      </h1>
                  </div>
                </div>
            </a>
        </div>
    </div>

@endsection