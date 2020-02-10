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
    @foreach($buku as $data)
    judul : {{$data['judul']}}<br>
    penerbit : {{$data['penerbit']}}<br>
    harga : {{$data['harga']}}<br>
    penulis : {{ $data['penulis']}}<hr>

       @if($data['harga'] >= 200000)
           @php $status = "Premium" @endphp
           @elseif($data['harga'] >= 150000)
           @php $status = "Regular" @endphp
           @else
           @php $status = "Bajakan" @endphp
           @endif
           Status : {{$status}}<br>
           
           @if($status == "Premium")
           @php $keterangan = "Pembeli Cerdas" @endphp
           @elseif($status == "Regular")
           @php $keterangan = "Pembeli Lumayan Cerdas" @endphp
           @else
           @php $keterangan = "Pembeli Tidak Cerdas" @endphp
           @endif
           Keterangan : {{$keterangan}}<hr>
           
           @endforeach
    </body>
</html>