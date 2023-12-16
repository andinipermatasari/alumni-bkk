<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/testimoni/add" class="btn btn-primary">Tambah data</a>
                    </div>
                    <div class="card-body">
                        @foreach($testimoni as $key => $item)
                            <div class="row">
                                <div class="col">
                                    <td>{{ $key+=1 }}</td>
                                    <h5>{{ $item->nama }}</h5>
                                    <h5>{{ $item->pesan }}</h5>
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