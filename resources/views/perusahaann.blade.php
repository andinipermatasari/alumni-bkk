<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/perusahaan/add" class="btn btn-primary">Tambah data</a>
                    </div>
                    <div class="card-body">
                        @foreach($perusahaan as $item)
                            <div class="row">
                                <div class="col-4">
                                    <img src="/storage/{{ $item->foto }}" alt="Foto Perusahaan" class="rounded-circle" width="200">
                                </div>
                                <div class="col">
                                    <h4 class="fw-bold">{{ $item->perusahaan }}</h4>
                                    <h5>{{ $item->kontak }}</h5>
                                    <h5>{{ $item->alamat }}</h5>
                                    <h5>{{ $item->deskripsi }}</h5>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>