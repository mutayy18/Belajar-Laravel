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
    <div class="col-sm-8 col-sm-offset-2">
    @foreach($data as $temp)
         <h3><small>{{$temp->nama}}[{{$temp->nim}}]</small></h3>
    <h5>Hobi :
    @foreach($temp->hobi as $tampung)
         <small>{{$tampung->hobi}}, </small>
    @endforeach
    </h5>
    <h4>
    <li>Nama Wali : <strong>{{$temp->wali->nama}}</strong></li>
    <li>Dosen pembimbing : <strong>{{$temp->dosen->nama}}</strong></li>
    </h4>
    <hr/>
    @endforeach
    </div>
</body>
</html>