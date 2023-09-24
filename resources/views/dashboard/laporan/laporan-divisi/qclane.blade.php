@extends('dashboard.layouts.main')

@section('title','Laporan QC LANE')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">LAPORAN QC LANE</div>
    </div>
    
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-bordered" id="qclane-table">
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
                    @foreach ($qclane as $item)
                        <tr>
                            <td rowspan="2">{{ $loop->iteration }}</td>
                            <td rowspan="2">{{ $item->kode_vin }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->team_lane }}</td>
                            <td>{{ $item->wsd_pic }}</td>
                            <td>{{ $item->fr_pic }}</td>
                            <td>{{ $item->fl_pic }}</td>
                            <td>{{ $item->rr_pic }}</td>
                            <td>{{ $item->rl_pic }}</td>
                            <td>{{ $item->qtrr_pic }}</td>
                            <td>{{ $item->qtrl_pic }}</td>
                            <td>{{ $item->bdr_pic }}</td>

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
                            <td>{{ $item->wsd_code }}</td>
                            <td>{{ $item->fr_code }}</td>
                            <td>{{ $item->fl_code }}</td>
                            <td>{{ $item->rr_code }}</td>
                            <td>{{ $item->rl_code }}</td>
                            <td>{{ $item->qtrr_code }}</td>
                            <td>{{ $item->qtrl_code }}</td>
                            <td>{{ $item->bdr_code }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        // $(document).ready(function() {
        //     $('#qclane-table').DataTable()
        // });
    </script>
@endsection