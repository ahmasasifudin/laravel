@extends('dashboard.layouts.main')

@section('title','Laporan Keseluruhan')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">LAPORAN KESELURUHAN</div>
    </div>
    
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-bordered" id="qclane-table">
                <thead class="table-light">
                    <tr>
                        <th rowspan="2">NO.</th>
                        <th rowspan="2">Kode VIN</th>
                        <th rowspan="2">MODEL</th>
                        <th rowspan="2">TEAM QC LANE</th>
                        <th rowspan="2">TEAM RTRW</th>
                        <th colspan="16" style="text-align: center">PANEL</th>
                    </tr>
                    <tr>
                        <th>WSD LANE</th>
                        <th>WSD RTRW</th>
                        <th>FR LANE</th>
                        <th>FR RTRW</th>
                        <th>FL LANE</th>
                        <th>FL RTRW</th>
                        <th>RR LANE</th>
                        <th>RR RTRW</th>
                        <th>RL LANE</th>
                        <th>RL RTRW</th>
                        <th>QTR R LANE</th>
                        <th>QTR R RTRW</th>
                        <th>QTR L LANE</th>
                        <th>QTR L RTRW</th>
                        <th>BDR LANE</th>
                        <th>BDR RTRW</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
                            <td rowspan="2">{{ $loop->iteration }}</td>
                            <td rowspan="2">{{ $item->kode_vin }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->team_lane }}</td>
                            <td>{{ $item->team_rtrw }}</td>
                            <td>{{ $item->wsd_pic }}</td>
                            <td>{{ $item->wsd_rtrw }}</td>
                            <td>{{ $item->fr_pic }}</td>
                            <td>{{ $item->fr_rtrw }}</td>
                            <td>{{ $item->fl_pic }}</td>
                            <td>{{ $item->fl_rtrw }}</td>
                            <td>{{ $item->rr_pic }}</td>
                            <td>{{ $item->rr_rtrw }}</td>
                            <td>{{ $item->rl_pic }}</td>
                            <td>{{ $item->rl_rtrw }}</td>
                            <td>{{ $item->qtrr_pic }}</td>
                            <td>{{ $item->qtrr_rtrw }}</td>
                            <td>{{ $item->qtrl_pic }}</td>
                            <td>{{ $item->qtrl_rtrw }}</td>
                            <td>{{ $item->bdr_pic }}</td>
                            <td>{{ $item->bdr_rtrw }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center">CODE INSTALLER</td>
                            <td colspan="2" style="text-align: center">{{ $item->wsd_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->fr_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->fl_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->rr_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->rl_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->qtrr_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->qtrl_code }}</td>
                            <td colspan="2" style="text-align: center">{{ $item->bdr_code }}</td>
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