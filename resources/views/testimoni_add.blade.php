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
    <form action="/testimoni/create" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div>
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4"></textarea>
        </div>
        <div>
            <button type="submit">Kirim Testimoni</button>
        </div>
    </form>
    
</body>
</html>
