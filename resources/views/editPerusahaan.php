<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Perusahaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="/perusahaan/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 mt-5 text-md-right">perusahaan</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="perusahaan" id="perusahaan">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">kontak</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="kontak" id="kontak">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">alamat</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="alamat" id="alamat">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">deskripsi</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="deskripsi" id="deskripsi">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">foto</label>
                                <div class="col-md-6 mt-5">
                                    <input type="file" name="foto" id="foto">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">status</label>
                                <div class="col-md-6 mt-5">
                                    <input type="enum" name="status" id="status">
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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