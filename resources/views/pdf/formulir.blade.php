<style>
    .form_cetak {
        padding: 10px;
        border: 1px solid;
        width: 680px;
        margin-left: -5px;
        background-color: #FFF;
        font-family: Tahoma, Geneva, sans-serif;
    }

    .form_cetak strong {
        font-size: 15px;
    }

    .form_cetak .header {
        width: 450px;
        height: 130px;
        /*background:url({{ asset('headerformulir.jpg') }});*/
        margin-left: -3px;
        margin-bottom: 15px;
    }

    .tabel_cetak {
        font-size: 15px;
        height: 300px;
        width: 650px;
    }

    .tabel_cetak .explan {
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 15px;
        width: 310px;
        margin: 20px 0;
    }

    .tabel_cetak img {
        width: 90px;
    }

    .borderspace {
        margin: 2px 0;
        padding: 1px;
        border-bottom: 1px solid #999;
    }

</style>

<script type="text/javascript">
    window.print()

</script>
<div class="form_cetak">
    <div class="header">
        <img src="{{ asset('headerpendaftaran.png')}}" width="680px" height="120px" style="object-fit:cover; object-position:center;">
    </div>

    <table class="tabel_cetak" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="width:200px">Nomor Pendaftaran</td>
            <td width="2">:</td>
            <td> <strong>{{ sprintf("%05d", $data->no_formulir)}}</strong>
                <div class="borderspace"></div>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><strong>{{ Str::upper($data->nama) }}</strong>
                <div class="borderspace"></div>
            </td>
        </tr>
        <tr>
             <td valign="top">Jurusan Yang Dipilih</td>
            <td valign="top">:</td>
            <td><strong>{{ $data->Jurusan->nama }}</strong>
                <div class="borderspace"></div>
            </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><strong>{{ Str::upper($data->nama_sekolah) }} {{ Str::upper($data->kab_sekolah) }}</strong>
                <div class="borderspace"></div>
            </td>
        </tr>
        <tr>
            <td colspan="2" valign="bottom" align="center" height="20">Tanda
                Tangan<br><br><br><br><br>(.........................................)<br>Orang Tua
            <td align="right" valign="bottom">
                {{-- <img src='{{ asset('gambar/pendaftar/'.$data->foto) }}' width='100' height='150' style="object-fit:cover; object-position:center;"> --}}
                <img src='{{ asset('gambar/pendaftar/'.$data->foto) }}' width='100' height='130' style="object-fit:cover; object-position:center;">

                {{-- echo"<div class='foto'>Foto</div>"; --}}

            </td>
        </tr>
    </table>
    <p>Note:</p>
    <ul type="">
        <li style="font-size:12px;margin-top:-15">
            Untuk melanjutkan proses pendaftaran silahkan melakukan pembayaran biaya pendaftaran Rp 50.000 melalui bank
            BRI 0403 0100 0104 309 atas nama SMK PENERBANGAN TECHNO TERAPAN MAKASSAR atau Di sekretariat PPDB SMK
            PENERBANGAN TECHNO TERAPAN MAKASSAR
        </li>
        <li style="font-size:12px">Setelah melakukan registrasi pembayaran pendaftaran kirim bukti pembayaran melalui via whatshaap (WA) Di
            nomor 0821 - 9735-5575 atau ke sekretariat PPDB SMK PENERBANGAN TECHNO TERAPAN MAKASSAR
        </li>
        <ul>
</div>
</div>
