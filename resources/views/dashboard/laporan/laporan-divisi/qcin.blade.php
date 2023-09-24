@extends('dashboard.layouts.main')

@section('title','Laporan QC IN')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">LAPORAN QC IN</div>
    </div>

    <div class="row">
        <div class="col-md-12 table-responsive">
            {{-- <div class="row my-3 justify-content-end">
                <form class="d-flex col-3" role="search" action="" method="get" id="search-form">
                    <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">
                        <span data-feather="search"></span>
                    </button>
                </form>
            </div> --}}
            <table class="table table-hover table-bordered" id="qcin-table">
                <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Install</th>
                        <th>Kode VIN</th>
                        <th>Model</th>
                        <th>Unit</th>
                        <th>Keterangan</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($qcin as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            @php
                                $date = \Carbon\Carbon::parse($item->tgl_install);
                                $formattedDate = $date->format('d F Y');
                            @endphp
            
                            <td>{{ $formattedDate }}</td>

                            <td>{{ $item->kode_vin }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <span class="align-text-bottom" data-feather="edit"></span>
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
    </script>
@endsection