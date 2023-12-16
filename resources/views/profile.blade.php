<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="car-body">
                        <form action="">
                            <div class="form-group row">
                                @foreach($alumni as $item)
                                    <label for="" class="col-md-4 mt-3 text-md-right">Nisn</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="nisn" class="form-control" value="{{$item->nisn}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Nis</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="nis" class="form-control" value="{{$item->nis}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Nama</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="nama_alumni" class="form-control" value="{{$item->nama_alumni}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">TTL</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="ttl" class="form-control" value="{{$item->ttl}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Jenis Kelamin</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="jk" class="form-control" value="{{$item->jk}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Alamat</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="alamat" class="form-control" value="{{$item->alamat}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Kontak</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="kontak" class="form-control" value="{{$item->kontak}}">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Foto</label>
                                    <div class="col-md-6 mt-3">
                                        <img src="{{ $item->foto }}" alt="Foto Profil">
                                    </div>
                                    <label for="" class="col-md-4 mt-3 text-md-right">Password</label>
                                    <div class="col-md-6 mt-3">
                                        <input type="text" name="password" class="form-control" value="{{$item->password}}">
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Profil Alumni</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="container">       
                <h1>Data Alumni</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Foto</th>
                            <th>Password</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumni as $item)
                            <tr>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama_alumni }}</td>
                                <td>{{ $item->ttl }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->kontak }}</td>
                                <td>{{ $item->foto }}</td>
                                <td>{{ $item->password }}</td>
                             
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html> -->
