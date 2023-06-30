@extends('dashboard.layouts.main')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">QC IN</div>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success my-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <form method="POST" action="/dashboard/qc-in" enctype="multipart/form-data" class="mb-5 border" autocomplete="off">
        @csrf
        <div class="row my-3 mx-3">
            <div class="col-md-3">
                <label for="image">VIN MOBIL</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-4 offset-md-1">
                <label for="image"></label>
                <img class="img-preview img-fluid">
            </div>
            <div class="col-md-3 offset-md-1">
                <label for="kode_vin">KODE VIN</label>
                <input type="text" class="form-control @error('kode_vin') is-invalid @enderror" id="kode_vin" name="kode_vin" placeholder="Kode VIN" required> {{ old('kode_vin') }}
                @error('kode_vin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div>
                <label for="model">MODEL</label>
                <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" placeholder="Model" required> {{ old('model') }}
                @error('model')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div class="col-md-3">
                <label for="waktu">WAKTU</label>
                <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" required> {{ old('waktu') }}
                @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row my-3 mx-3">
            <div class="col-md-3">
                <label for="tgl_install">TGL INSTALL</label>
                <input type="date" class="form-control @error('tgl_install') is-invalid @enderror" id="tgl_install" name="tgl_install" required> {{ old('tgl_install') }}
                @error('tgl_install')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-md-6">
            <label for="kondisi">KONDISI KACA</label>
                <table class="table table-bordered">
                    <tr>
                        <th class="table-light col-md-3" style="text-align: center">Unit</th>
                        <th class="table-light" style="text-align: center">Keterangan</th>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-select form-select-sm js-example-basic-single" name="unit">
                                <option selected>Unit</option>
                                <option value="OK">OK</option>
                                <option value="NG">NG</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="Keterangan" required> {{ old('keterangan') }}
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mb-4 mx-3">
            <div class="col-md-3">
                <label for="pic">NAMA PIC</label>
                <input type="text" class="form-control @error('pic') is-invalid @enderror" id="pic" name="pic" placeholder="Nama PIC" required> {{ old('pic') }}
                @error('pic')
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
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFRevent) {
                imgPreview.src = oFRevent.target.result;
            }
        }
    </script>
@endsection