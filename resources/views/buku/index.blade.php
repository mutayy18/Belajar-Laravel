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
    <center>Daftar Buku</center>
    <table border=1>
    <tr>
    <thead>
    <th>Judul</th>
    <th>Jumlah halaman</th>
    <th>Penerbit</th>
    <th>Status</th>
    <th>Synopsis</th>
    <th>aksi</th>

    </tr>
    </thead>
    <tbody>
    @foreach($buku as $book)
    <tr>
    
    <td>{{$book->judul}}</td>
    <td>{{$book->jumlah_halaman}}</td>
    <td>{{$book->penerbit}}</td>
    <td>{{$book->status}}</td>
    <td>{{$book->synopsis}}</td>
    <td><a href="/book/{{$book->id}}">Lihat</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>