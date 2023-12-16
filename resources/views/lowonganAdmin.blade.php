<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lowongan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="/lowongan/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 mt-5 text-md-right">Nisn</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="nisn" id="nisn">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Id Perusahaan</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="id_perusahaan" id="id_perusahaan">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Id Admin</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="id_admin" id="id_admin">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Lowongan</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="lowongan" id="lowongan">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Syarat</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="syarat" id="syarat">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Keahlian</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="keahlian" id="keahlian">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Kualifikasi</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="kualifikasi" id="kualifikasi">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Jam Kerja</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="jam_kerja" id="jam_kerja">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Gaji</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="gaji" id="gaji">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Pendidikan</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="pendidikan" id="pendidikan">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Tipe Kerja</label>
                                <div class="col-md-6 mt-5">
                                    <input type="text" name="tipe_kerja" id="tipe_kerja">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Tanggal Post</label>
                                <div class="col-md-6 mt-5">
                                    <input type="date" name="tgl_post" id="tgl_post">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Tanggal Konfirmasi</label>
                                <div class="col-md-6 mt-5">
                                    <input type="date" name="tg_konfirmasi" id="tg_konfirmasi">
                                </div>
                                <label for="" class="col-md-4 mt-5 text-md-right">Status</label>
                                <div class="col-md-6 mt-5">
                                    <input type="enum" name="status" id="status">
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