@extends('dashboard.layouts.main')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">LOADING ZONE</div>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success my-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <form method="POST" action="/dashboard/loading-zone" enctype="multipart/form-data" class="mb-5 border" autocomplete="off">
    @csrf
        <div class="row my-3 mx-3">
            <div class="col-md-3">
            <label for="vinMobil">VIN MOBIL</label>
                <select name="kodeVin" id="kodeVin" class="form-select input">
                    <option selected>Search Kode VIN</option>
                    @foreach ($rt_rws as $rtrw)
                        <option value="{{ $rtrw->kode_vin }}">{{ $rtrw->kode_vin }}</option>
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
                <label for="model">TGL INSTALL</label>
                <input type="date" class="form-control @error('tgl_install') is-invalid @enderror" placeholder="Tanggal Install" id="tgl_install" name="tgl_install">
                @error('tgl_install')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3 offset-md-3">
                <label for="model">WAKTU IN</label>
                <input type="time" class="form-control @error('waktu_in') is-invalid @enderror" placeholder="Waktu IN" id="waktu_in" name="waktu_in">
                @error('waktu_in')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-md-10">
            <label for="model">KONDISI KACA</label>
                <table class="table table-bordered">
                    <tr>
                        <th class="table-light col-md-3" style="text-align: center">PANEL KF</th>
                        <th class="table-light col-md-3" style="text-align: center">QC IN</th>
                        <th class="table-light" style="text-align: center">Code Installer</th>
                        <th class="table-light" style="text-align: center">PIC Check</th>
                        <th class="table-light" style="text-align: center">RTRW Check</th>
                        <th class="table-light" style="text-align: center">LZ Check</th>
                    </tr>
                    <tr>
                        <td style="text-align: center">WSD</td>
                        <td rowspan="8">
                            <textarea name="keterangan" id="keterangan" cols="2" rows="15" class="form-control" disabled readonly></textarea>
                        </td>
                        <td>
                            <input type="text" id="wsd_code" name="wsd_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="wsd_pic" name="wsd_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="wsd_rtrw" name="wsd_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="wsd_lz" name="wsd_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">FR</td>
                        <td>
                            <input type="text" id="fr_code" name="fr_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="fr_pic" name="fr_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="fr_rtrw" name="fr_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="fr_lz" name="fr_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">FL</td>
                        <td>
                            <input type="text" id="fl_code" name="fl_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="fl_pic" name="fl_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="fl_rtrw" name="fl_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="fl_lz" name="fl_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">RR</td>
                        <td>
                            <input type="text" id="rr_code" name="rr_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="rr_pic" name="rr_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="rr_rtrw" name="rr_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="rr_lz" name="rr_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">RL</td>
                        <td>
                            <input type="text" id="rl_code" name="rl_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="rl_pic" name="rl_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="rl_rtrw" name="rl_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="rl_lz" name="rl_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">QTR R</td>
                        <td>
                            <input type="text" id="qtrr_code" name="qtrr_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="qtrr_pic" name="qtrr_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="qtrr_rtrw" name="qtrr_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="qtrr_lz" name="qtrr_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">QTR L</td>
                        <td>
                            <input type="text" id="qtrl_code" name="qtrl_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="qtrl_pic" name="qtrl_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="qtrl_rtrw" name="qtrl_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="qtrl_lz" name="qtrl_lz" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">BDR</td>
                        <td>
                            <input type="text" id="bdr_code" name="bdr_code" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="bdr_pic" name="bdr_pic" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td>
                            <input type="text" id="bdr_rtrw" name="bdr_rtrw" class="form-control form-control-sm" disabled readonly>
                        </td>
                        <td><input type="text" id="bdr_lz" name="bdr_lz" class="form-control form-control-sm"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb-4 mx-3">
            <div class="col-md-3">
                <label for="model">NAMA PIC</label>
                <input type="text" class="form-control @error('pic') is-invalid @enderror" placeholder="Nama PIC" name="pic" id="pic">
                @error('pic')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="model">TEAM</label>
                <input type="text" class="form-control @error('team') is-invalid @enderror" placeholder="Team" name="team" id="team">
                @error('team')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="model">WAKTU OUT</label>
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
                        url: '/dashboard/loading-zone/model/' + vin,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            $('#model').val(data[0].model);
                            $('#keterangan').val(data[0].keterangan_in);
                            $('#wsd_code').val(data[0].wsd_code);
                            $('#fr_code').val(data[0].fr_code);
                            $('#fl_code').val(data[0].fl_code);
                            $('#rr_code').val(data[0].rr_code);
                            $('#rl_code').val(data[0].rl_code);
                            $('#qtrr_code').val(data[0].qtrr_code);
                            $('#qtrl_code').val(data[0].qtrl_code);
                            $('#bdr_code').val(data[0].bdr_code);
                            $('#wsd_pic').val(data[0].wsd_pic);
                            $('#fr_pic').val(data[0].fr_pic);
                            $('#fl_pic').val(data[0].fl_pic);
                            $('#rr_pic').val(data[0].rr_pic);
                            $('#rl_pic').val(data[0].rl_pic);
                            $('#qtrr_pic').val(data[0].qtrr_pic);
                            $('#qtrl_pic').val(data[0].qtrl_pic);
                            $('#bdr_pic').val(data[0].bdr_pic);
                            $('#wsd_rtrw').val(data[0].wsd_rtrw);
                            $('#fr_rtrw').val(data[0].fr_rtrw);
                            $('#fl_rtrw').val(data[0].fl_rtrw);
                            $('#rr_rtrw').val(data[0].rr_rtrw);
                            $('#rl_rtrw').val(data[0].rl_rtrw);
                            $('#qtrr_rtrw').val(data[0].qtrr_rtrw);
                            $('#qtrl_rtrw').val(data[0].qtrl_rtrw);
                            $('#bdr_rtrw').val(data[0].bdr_rtrw);
                        }
                    });
                } else {
                    $('#model').empty();
                    $('#keterangans').empty();
                    $('#wsd_code').empty();
                    $('#fr_code').empty();
                    $('#fl_code').empty();
                    $('#rr_code').empty();
                    $('#rl_code').empty();
                    $('#qtrr_code').empty();
                    $('#qtrl_code').empty();
                    $('#bdr_code').empty();
                    $('#wsd_pic').empty();
                    $('#fr_pic').empty();
                    $('#fl_pic').empty();
                    $('#rr_pic').empty();
                    $('#rl_pic').empty();
                    $('#qtrr_pic').empty();
                    $('#qtrl_pic').empty();
                    $('#bdr_pic').empty();
                    $('#wsd_rtrw').empty();
                    $('#fr_rtrw').empty();
                    $('#fl_rtrw').empty();
                    $('#rr_rtrw').empty();
                    $('#rl_rtrw').empty();
                    $('#qtrr_rtrw').empty();
                    $('#qtrl_rtrw').empty();
                    $('#bdr_rtrw').empty();
                }
            });
        });
    </script>
@endsection