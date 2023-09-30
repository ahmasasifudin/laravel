@extends('dashboard.layouts.main')

@section('title','Laporan RTRW')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">LAPORAN RTRW</div>
    </div>
    
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-bordered" id="rtrw-table">
                <thead class="table-light">
                    <tr>
                        <th rowspan="2">NO.</th>
                        <th rowspan="2">Kode VIN</th>
                        <th rowspan="2">MODEL</th>
                        <th rowspan="2">TEAM</th>
                        <th colspan="8" style="text-align: center">PANEL</th>
                        <th rowspan="2" style="text-align: center">ACTION</th>
                    </tr>
                    <tr>
                        <th>WSD</th>
                        <th>FR</th>
                        <th>FL</th>
                        <th>RR</th>
                        <th>RL</th>
                        <th>QTR R</th>
                        <th>QTR L</th>
                        <th>BDR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rtrw as $item)
                        <tr>
                            <td rowspan="2">{{ $loop->iteration }}</td>
                            <td rowspan="2">{{ $item->kode_vin }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->team_rtrw }}</td>
                            <td>{{ $item->wsd_pic_rtrw }}</td>
                            <td>{{ $item->fr_pic_rtrw }}</td>
                            <td>{{ $item->fl_pic_rtrw }}</td>
                            <td>{{ $item->rr_pic_rtrw }}</td>
                            <td>{{ $item->rl_pic_rtrw }}</td>
                            <td>{{ $item->qtrr_pic_rtrw }}</td>
                            <td>{{ $item->qtrl_pic_rtrw }}</td>
                            <td>{{ $item->bdr_pic_rtrw }}</td>

                            <td rowspan="2">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <span class="align-text-bottom" data-feather="edit"></span>
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">CODE INSTALLER</td>
                            <td>{{ $item->wsd_rtrw }}</td>
                            <td>{{ $item->fr_rtrw }}</td>
                            <td>{{ $item->fl_rtrw }}</td>
                            <td>{{ $item->rr_rtrw }}</td>
                            <td>{{ $item->rl_rtrw }}</td>
                            <td>{{ $item->qtrr_rtrw }}</td>
                            <td>{{ $item->qtrl_rtrw }}</td>
                            <td>{{ $item->bdr_rtrw }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection