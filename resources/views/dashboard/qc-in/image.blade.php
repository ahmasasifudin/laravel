@extends('dashboard.layouts.main')

@section('title','Generate Image')

@section('container')
    <div class="card border-light my-4">
        <div class="card-header h4 fw-bold" style="text-align: center">QC IN</div>
    </div>

    <form action="/dashboard/qc-in/image" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
        <button class="btn btn-primary mt-2" type="submit">Proses Gambar</button>
    </form>
    <div class="col-md-4 offset-md-1">
        <label for="image"></label>
        <img class="img-preview img-fluid">
    </div>

    @if(isset($ocrHasil))
        <h2>Code VIN:</h2>
        {{ $ocrHasil }}

        <p>Copy This Code VIN</p>
    @endif

    <a href="/dashboard/qc-in" class="btn btn-sm btn-warning mt-3">
        <span data-feather="arrow-left"></span>
        Back To Form
    </a>

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
        };
    </script>
@endsection