<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="car-body">
                        <form action="">
                            <div class="form-group row">
                                @foreach($admin as $item)
                                    <label for="" class="col-md-4 text-md-right">Id Admin</label>
                                    <div class="col-md-6">
                                        <input type="text" name="id" class="form-control" value="{{$item->id_admin}}">
                                    </div>
                                    <label for="" class="col-md-4 text-md-right">Nama Admin</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nama" class="form-control" value="{{$item->nama}}">
                                    </div>
                                    <label for="" class="col-md-4 text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control" value="{{$item->email}}">
                                    </div>
                                    <label for="" class="col-md-4 text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" name="password" class="form-control" value="{{$item->password}}">
                                    </div>
                                    <label for="" class="col-md-4 text-md-right">Kontak</label>
                                    <div class="col-md-6">
                                        <input type="text" name="kontak" class="form-control" value="{{$item->kontak}}">
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