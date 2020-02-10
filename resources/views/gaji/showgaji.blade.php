<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <fieldset>
        <legend>Show Gaji</legend>
        Nip : <b>{{$gaji->nip}}</b><br>
        Nama : <b>{{$gaji->nama}}</b><br>
        Agama : <b>{{$gaji->agama}}</b><br>
        Jenis Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
        Alamat : <b>{{$gaji->alamat}}</b><br>
        Jabatan : <b>{{$gaji->jabatan}}</b><br>
        
         @if($gaji->jabatan == "Manager")
             @php $gajihan = "5000000" @endphp
         @elseif($gaji->jabatan == "Sekretaris")
              @php $gajihan = "3500000 " @endphp
         @else
              @php $gajihan = "2500000 " @endphp
         @endif
         Gaji Jabatan : <b>{{ $gajihan }}</b><br>

         @if($gaji->jam_kerja >= 150)
             @php $total = $gajihan*5/100 @endphp
         @elseif($gaji->jam_kerja >= 200 )
              @php $total = $gajihan*7.5/100 @endphp
         @elseif($gaji->jam_kerja >= 200)
              @php $total = $gajihan*10/100 @endphp
         @else
         @php $total = 0 @endphp
         @endif
         Upah : <b>{{ $total }}</b>
         <br>
         Jam Kerja : <b> {{ $gaji->jam_kerja }} </b>     
    </fieldset>
</body>
</html>