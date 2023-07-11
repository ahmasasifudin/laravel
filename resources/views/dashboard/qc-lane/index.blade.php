@extends('dashboard.layouts.main')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">QC LANE</div>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success my-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <form method="POST" action="/dashboard/qc-lane" enctype="multipart/form-data" class="mb-5 border" autocomplete="off">
    @csrf
        <div class="row my-3 mx-3">
            <div class="col-md-3">
                <label for="vinMobil">VIN MOBIL</label>
                <select name="kodeVin" id="kodeVin" class="form-select input">
                    <option selected>Search Kode VIN</option>
                    @foreach ($qc_ins as $qcin)
                        <option value="{{ $qcin->kode_vin }}">{{ $qcin->kode_vin }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div>
                <label for="model">MODEL</label>
                <input type="text" class="form-control @error('model') is-invalid @enderror" placeholder="Model" id="model" name="model">
                @error('model')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div class="col-md-3">
                <label for="tgl_install">TGL INSTALL</label>
                <input type="date" class="form-control @error('tgl_install') is-invalid @enderror" placeholder="Tanggal Install" id="tgl_install" name="tgl_install">
                @error('tgl_install')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3 offset-md-3">
                <label for="waktu_in">WAKTU IN</label>
                <input type="time" class="form-control @error('waktu_in') is-invalid @enderror" placeholder="Waktu IN" id="waktu_in" name="waktu_in">
                @error('waktu_in')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-md-6">
            <label for="model">KONDISI KACA</label>
                <table class="table table-bordered">
                    <tr>
                        <th class="table-light col-md-3" style="text-align: center">PANEL KF</th>
                        <th class="table-light col-md-3" style="text-align: center">QC IN</th>
                        <th class="table-light" style="text-align: center">Code Installer</th>
                        <th class="table-light" style="text-align: center">PIC Check</th>
                    </tr>
                    <tr>
                        <td style="text-align: center">WSD</td>
                        <td rowspan="8">
                            <textarea name="keterangan_in" id="keterangan_in" cols="2" rows="15" class="form-control" disabled readonly></textarea>
                        </td>
                        <td><input type="text" class="form-control form-control-sm" name="wsd_code" id="wsd_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="wsd_pic" id="wsd_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">FR</td>
                        <td><input type="text" class="form-control form-control-sm" name="fr_code" id="fr_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="fr_pic" id="fr_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">FL</td>
                        <td><input type="text" class="form-control form-control-sm" name="fl_code" id="fl_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="fl_pic" id="fl_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">RR</td>
                        <td><input type="text" class="form-control form-control-sm" name="rr_code" id="rr_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rr_pic" id="rr_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">RL</td>
                        <td><input type="text" class="form-control form-control-sm" name="rl_code" id="rl_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rl_pic" id="rl_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">QTR R</td>
                        <td><input type="text" class="form-control form-control-sm" name="qtrr_code" id="qtrr_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="qtrr_pic" id="qtrr_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">QTR L</td>
                        <td><input type="text" class="form-control form-control-sm" name="qtrl_code" id="qtrl_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="qtrl_pic" id="qtrl_pic"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">BDR</td>
                        <td><input type="text" class="form-control form-control-sm" name="bdr_code" id="bdr_code"></td>
                        <td><input type="text" class="form-control form-control-sm" name="bdr_pic" id="bdr_pic"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb-4 mx-3">
            <div class="col-md-3">
                <label for="pic">NAMA PIC</label>
                <input type="text" class="form-control @error('pic') is-invalid @enderror" placeholder="Nama PIC" name="pic" id="pic">
                @error('pic')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="team">TEAM</label>
                <input type="text" class="form-control @error('team') is-invalid @enderror" placeholder="Team" name="team" id="team">
                @error('team')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="waktu_out">WAKTU OUT</label>
                <input type="time" class="form-control @error('waktu_out') is-invalid @enderror" placeholder="Waktu Out" name="waktu_out" id="waktu_out">
                @error('waktu_out')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="offset-md-11">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#kodeVin').select2( {
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%':'style',
                placeholder: $(this).data('placeholder'),
            });
        });

        $(document).ready(function() {
            $('#kodeVin').on('change', function() {
                var vin = $(this).val();
                // console.log(vin);
                if (vin) {
                    $.ajax({
                        url: '/dashboard/qc-lane/model/' + vin,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data) {
                            // console.log(data);
                            $('#model').val(data[0].model);
                            $('#keterangan_in').val(data[0].keterangan);
                        }
                    });
                } else {
                    $('#model').empty();
                    $('#keterangan_in').empty();
                }
            });
        });

        $(document).ready(function() {
            $('form').submit(function() {
                $('#keterangan_in').prop('disabled', false);
            });
        });
    </script>
@endsection