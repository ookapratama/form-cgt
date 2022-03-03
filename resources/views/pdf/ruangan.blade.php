<!DOCTYPE html>

<style>
    .export-data {
        font-size: 20px;
    }
    .export-data td{
        font-size: 20px;
        padding:10;
    }
    .page_break { page-break-before: always; }

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
        $no = 1;
        $ruangan = 1;
    @endphp
    @while ($ruangan <= $data)
    <div class="page_break">
        <table class="export-data" border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th colspan="4"> <h1>Ruangan {{ $ruangan }}</h1></th>
            </tr>
            <tr>
                <th style="width:5%">NO</th>
                <th style="width:30%">NIK</th>
                <th width="40%">NAMA</th>
                <th width="20%">NOMOR TES</th>
            </tr>
            @php
                $cek = App\Models\Formulir::where('ruangan', $ruangan)
                    ->orderBy('no_tes')
                    ->get();
            @endphp
            @foreach ($cek as $key => $v)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $v->nik }}</td>
                    <td>{{ Str::upper($v->nama) }}</td>
                    <td>112-22-{{ $v->no_tes }}</td>
                    
                </tr>
            @endforeach
        </table>
    </div>
        @php $ruangan++ @endphp
    @endwhile
</body>

</html>
