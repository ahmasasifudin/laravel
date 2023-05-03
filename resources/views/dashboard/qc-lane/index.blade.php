@extends('dashboard.layouts.main')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">QC LANE</div>
    </div>
    <form action="" class="mb-5 border">
        <div class="row my-3 mx-3">
            <div class="col-md-3">
            <label for="vinMobil">VIN MOBIL</label>
                <select class="form-select">
                    <option selected>Search Kode VIN</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div>
            <label for="model">MODEL</label>
            <input type="text" class="form-control" placeholder="Model">
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div class="col-md-3">
            <label for="model">TGL INSTALL</label>
            <input type="text" class="form-control" placeholder="Tanggal Install">
            </div>
            <div class="col-md-3 offset-md-3">
            <label for="model">WAKTU IN</label>
            <input type="text" class="form-control" placeholder="Waktu IN">
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
                        <td rowspan="8"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">FR</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">FL</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">RR</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">RL</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">QTR R</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">QTR L</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center">BDR</td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                        <td><input type="text" class="form-control form-control-sm"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb-4 mx-3">
            <div class="col-md-3">
            <label for="model">NAMA PIC</label>
            <input type="text" class="form-control" placeholder="Nama PIC">
            </div>
            <div class="col-md-3">
            <label for="model">TEAM</label>
            <input type="text" class="form-control" placeholder="Team">
            </div>
            <div class="col-md-3">
            <label for="model">WAKTU OUT</label>
            <input type="text" class="form-control" placeholder="Waktu Out">
            </div>
        </div>

        <div class="offset-md-11">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>
@endsection