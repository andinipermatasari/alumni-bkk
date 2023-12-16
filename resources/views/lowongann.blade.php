<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/lowongan/add" class="btn btn-primary">Tambah data</a>
                    </div>
                    <div class="card-body">
                        @foreach($lowongan as $item)
                            <div class="row">
                                <!-- <div class="col-4">
                                    <img src="/storage/{{ $item->foto }}" alt="Foto Perusahaan" class="rounded-circle" width="200">
                                </div> -->
                                <div class="col">
                                    <h5>{{ $item->nisn }}</h5>
                                    <h5>{{ $item->id_perusahaan }}</h5>
                                    <h5>{{ $item->id_admin ?? none}}</h5>
                                    <h5>{{ $item->lowongan }}</h5>
                                    <h5>{{ $item->syarat }}</h5>
                                    <h5>{{ $item->keahlian }}</h5>
                                    <h5>{{ $item->kualifikasi }}</h5>
                                    <h5>{{ $item->jam_kerja }}</h5>
                                    <h5>{{ $item->gaji }}</h5>
                                    <h5>{{ $item->pendidikan }}</h5>
                                    <h5>{{ $item->tipe_kerja }}</h5>
                                    <h5>{{ $item->tgl_post }}</h5>
                                    <h5>{{ $item->tg_konfirmasi }}</h5>
                                    <!-- <h5>{{ $item->status }}</h5> -->
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