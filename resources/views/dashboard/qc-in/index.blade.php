@extends('dashboard.layouts.main')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">QC IN</div>
    </div>
    <form action="" class="mb-5 border">
        <div class="row my-3 mx-3">
            <div class="col-md-3">
            <label for="vinMobil">VIN MOBIL</label>
                <select class="form-select">
                    <option selected>Choose File</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-4 offset-md-1">
            <label for="gambarVin"></label>
            <input type="text" class="form-control" placeholder="Gambar Kode VIN">
            </div>
            <div class="col-md-3 offset-md-1">
            <label for="kodeVin">KODE VIN</label>
            <input type="text" class="form-control" placeholder="Last name">
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
            <label for="model">WAKTU</label>
            <input type="text" class="form-control" placeholder="Waktu">
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div class="col-md-3">
            <label for="model">TGL INSTALL</label>
            <input type="text" class="form-control" placeholder="Tanggal Install">
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-md-6">
            <label for="model">KONDISI KACA</label>
                <table class="table table-bordered">
                    <tr>
                        <th class="table-light col-md-3" style="text-align: center">Unit</th>
                        <th class="table-light" style="text-align: center">Keterangan</th>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-select form-select-sm">
                                <option selected>Unit</option>
                                <option value="OK">OK</option>
                                <option value="NG">NG</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm" placeholder="Keterangan">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb-4 mx-3">
            <div class="col-md-3">
            <label for="model">NAMA PIC</label>
            <input type="text" class="form-control" placeholder="Nama PIC">
            </div>
        </div>

        <div class="offset-md-11">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>
@endsection