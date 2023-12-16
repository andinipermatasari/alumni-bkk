@extends('index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <ul>
                            <li class="header-icon dib"><i class="ti-bell"></i>
                                <div class="drop-down">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                </div>
                            </li>
                            <li class="header-icon dib"><i class="ti-email"></i>
                                <div class="drop-down">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card">
                        <a href="/alumni/add" class="btn btn-primary">Tambah Data</a>
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="wrapper">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="width: 1200px;">
                                            <tr>
                                                <th>Nisn</th>
                                                <th>Nis</th>
                                                <th>Nama Alumni</th>
                                                <th>TTL</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Kontak</th>
                                                <th>Foto</th>
                                                <th>Password</th>
                                            </tr>
                                            @foreach($alumni as $item)
                                            <tr>
                                                <td>{{ $item->nisn }}</td>
                                                <td>{{ $item->nis }}</td>
                                                <td>{{ $item->nama_alumni }}</td>
                                                <td>{{ $item->ttl }}</td>
                                                <td>{{ $item->jk }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->kontak }}</td>
                                                <td><img src="/storage/{{ $item->foto }}" alt="" class="rounded-circle" width="200"></td>
                                                <td>{{ $item->password }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection