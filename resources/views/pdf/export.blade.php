<!DOCTYPE html>
<style>
    .export-data {
        font-size: 10px;
    }



</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@php
    $no=1;
@endphp
    <table class="export-data" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>no</th>
            <th>nik</th>
            <th>nisn</th>
            <th>nama</th>
            <th>nomor hp</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Nama Orang Tua</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Nama Sekolah Asal</th>
            <th>Kab Sekolah Asal</th>
            <th>Kec Sekolah Asal</th>
            <th>Prov Sekolah Asal</th>
            <th>Status Pembayaran</th>
        </tr>
@foreach ($data as $key => $v)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$v->nik}}</td>
            <td>{{$v->nisn}}</td>
            <td>{{$v->nama}}</td>
            <td>{{$v->no_hp}}</td>
            <td>{{$v->jenis_kelamin}}</td>
            <td>{{$v->tempat }} {{$v->tanggal}}</td>
            <td>{{$v->Jurusan->nama}}</td>
            <td>{{$v->ortu}}</td>
            <td>{{$v->pekerjaan}}</td>
            <td>{{$v->nama_sekolah}}</td>
            <td>{{$v->kab_sekolah}}</td>
            <td>{{$v->kec_sekolah}}</td>
            <td>{{$v->provinsi_sekolah}}</td>
            <td>{{$v->status==1?"Belum":"Sudah"}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>