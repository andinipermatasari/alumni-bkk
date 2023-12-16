<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Perusahaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="car-body">
                        <form action="/alumni/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-md-right">Nisn</label>
                                <div class="col-md-6">
                                    <input type="text" name="nisn" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Nis</label>
                                <div class="col-md-6">
                                    <input type="text" name="nis" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Nama</label>
                                <div class="col-md-6">
                                    <input type="text" name="nama_alumni" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">TTL</label>
                                <div class="col-md-6">
                                    <input type="text" name="ttl" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <input type="enum" name="jk" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Alamat</label>
                                <div class="col-md-6">
                                    <input type="text" name="alamat" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Kontak</label>
                                <div class="col-md-6">
                                    <input type="text" name="kontak" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Foto</label>
                                <div class="col-md-6">
                                    <input type="file" name="foto" id="form-control">
                                </div>
                                <label for="" class="col-md-4 text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="text" name="password" id="form-control">
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>