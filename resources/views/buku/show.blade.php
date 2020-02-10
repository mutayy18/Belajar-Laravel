<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>Show Data Buku</legend>
    Judul : <b>{{$buku->judul}}</b><br>
    Jumlah halaman : <b>{{$buku->jumlah_halaman}}</b><br>
    Penerbit : <b>{{$buku->penerbit}}</b><br>
    Status : <b>{{$buku->status}}</b><br>
    Synopsis : <b>{{$buku->synopsis}}</b>
    </fieldset>
</body>
</html>