<style>
	.form_cetak {
		padding:20px;
		border:1px solid;
		width:700px;
		background-color:#FFF;	
		font-family:Tahoma, Geneva, sans-serif;
		}

	.form_cetak strong{
		font-size:11px;	
	}
	.form_cetak .header {
		width:390px;
		height:120px;
		/*background:url("header.png");*/
		margin-left:-3px;
		margin-bottom:25px;
	}
	.tabel_cetak {
		font-size:11px;	
		/*height:300px;	*/
		padding: 10px;
		width:700px;
	}
	.tabel_cetak .explan {
		font-family:Tahoma, Geneva, sans-serif;
		font-size:11px;
		width:310px;
		margin:5px 0;
	}
	.tabel_cetak img {
		width:100px;
	}
	.borderspace{
		margin:2px 0;
		padding:0;
		border-bottom:1px solid #999;
	}
	th{
		height: 15px;
		
	}
</style>
@php
	$date=date('d F Y')
	
@endphp
<script type="text/javascript">
	window.print() 
</script>
<div class="form_cetak" >
	
	<img src="{{ asset('header.png')}}" width="680px" height="120px" />
	<hr>
	<table class="tabel_cetak" cellpadding="0" cellspacing="0" border="0" >
		<tr align="left">
			<th>NOMOR PENDAFTARAN</th>
			<th>:</th>
			<th>{{ sprintf("%05d", $data->no_formulir)}}</th>
			<th width="250px">NO. TES : 112-22-{{ sprintf("%05d", $data->no_tes)}}</th>
			<th width="100px">RUANGAN : {{$data->ruangan}}</th>
		</tr>
		<tr align="left">
			<th>NAMA PESERTA</th>
			<th>: </th>
			<th colspan="3"> {{Str::upper($data->nama)}}</th>
		</tr>

		<tr align="left">
			<th>ASAL SEKOLAH</th>
			<th>:</th>
			<th colspan="3"> {{Str::upper($data->nama_sekolah)}} {{Str::upper($data->kab_sekolah)}}</th>
		</tr>
		<tr align="left">
			 <th valign="top">JURUSAN YANG DIPILIH</th>
            <th valign="top">:</th>
			<th colspan="3">{{$data->Jurusan->nama}}</th>
		</tr>
	</table>
	<table class="tabel_cetak"  cellpadding="0" cellspacing="0" border="0" >
		<tr align="left">
			<th width="200px">KETERANGAN : </th>
			<th style="color : white;" width="200px">:</th>
			<th width="100px"> SAAT UJIAN DIWAJIBKAN :</th>
		</tr>
		<tr align="left">

			<th> 1. TES AKADEMIK</th>
			<td width="150px">: Senin, 13 Juni 2022 (Gel I)</td>
			<td width="180px">1. Membawa Kartu Tes</td>
		</tr>

		<tr align="left">
			<th style=""></th>
			<td width="150px">: Senin, 25 Juli 2022 (Gel II)</td>
			<td>2. Berpakaian SMP/MTs/Bebas Rapi</td>
			
			
		</tr>
		<tr align="left">
			<th style="padding-left:10">WAKTU</th>
			<td width="150px">: 08.00 - 10.00 Wita</td>
			<td >3. Membawa Perlngkapan Ujian</td>
		
		</tr>
		
		<tr align="left">
			<th><ol start="2" style="margin-left:-20"><li>TES KESEHATAN DAN WAWANCARA</li></ol></th>
			<td width="150px">: Selasa, 14 Juni 2022 (Gel I)</td>
			<td style="padding-left:15">a. Papan Standar</td>
		</tr>
	
		<tr align="left">
			<th style=""></th>
			<td width="150px">: Selasa, 26 Juli 2022(Gel II)</td>
			<td style="padding-left:15">b. Pensil 2B</td>
		</tr>
		<tr align="left">
			<th style="padding-left:10">WAKTU</th>
			<td style="">: 08.00 s/d Selesai</td>
			<td style="padding-left:15">c. Pulpen</td>
		</tr>
		<tr align="left">
			<th style="">3. PENGUMUMAN HASIL TES</th>
			<td style="">: Rabu, 15 Juni 2022 (Gel I)</td>
			<td style="padding-left: 15;">d. Penghapus</td>
		</tr>
		<tr align="left">
			<th style=""></th>
			<td style="">: Rabu, 27 Juli 2022 (Gel II)</td>
			<td style="padding-left:15">e. Peruncing</td>
		</tr>
		<tr align="left">
			<th style="padding-left: 10">WAKTU</th>
			<td >: 10.00 Wita</td>
			<td style="padding-left:15">f. Mistar</td>
		</tr>

		<tr align="left">
			<th> </th>
			<td width="150px"></td>
			<td style=""></td>
		</tr>
		<tr align="left">
			<th style="color : white;"></th>
			<td width="150px"></td>
			<td>Makassar, {{$date}}</td>
			
		
		</tr>
		<tr align="left">
			<th style="padding-left: 15;"></th>
			<td></td>
			<td >Kepala Sekolah</td>
			
		</tr>
		<tr align="left">
			<th>CONTACT PERSON :</th>
			<td width="150px"></td>
			<td rowspan="5">
			<img src="{{ asset('tandatangan.jpg')}}" width="100px" height="100px" />
			</td>
		</tr>

		<tr align="left">
			<th>PPDB SMKP Terapan Makassar</th>
			<td width="150"></td>
		</tr>

		<tr align="left">
			<th>0821 9735 5575 (WA)</th>
			<td></td>
		</tr>
		<tr align="left">
			<th>0821 9735 5595 (WA)</th>
			<td></td>
		</tr>
		<tr align="left">
			<th></th>
			<td></td>
		</tr>
		<tr align="left">
			<th></th>
			<td></td>
			<td ><b><u>Dr. Sudirman Kadir, S.Pd., MM</u></b></td>
			
		</tr>

		<tr align="left">
			<th></th>
			<td style="color : white;">tess</td>
			<td colspan="2">NIP. 19700127 200411 001</td>
		</tr>
	</table>
	<!-- <table class = "table_cetak" border="1" >
		<tr align="left" >
			<th><u>KETERANGAN :</u></th>
			<th style="color : white;">aaa</th>
			<th style="color: white;">sbsb</th>
			<th>SAAT UJIAN DIWAJIBKAN</th>
		</tr>
		<tr>
			<th>1.</th>
			<th>TES TERTULIS</th>
			<th>:</th>
			<th>Selasa, 2 Juni 2020 (Gel</th>
		</tr>

		<tr>
			<td colspan="2" valign="bottom" align="center" height="30">Tanda Tangan<br><br><br><br><br>(.........................................)<br>Orang Tua
			<td align="right" valign="bottom">
				<img src='ava.jpg' width='100' height='150' style="object-fit:cover; object-position:center;">
				
			
			</td>
		</tr>
	</table> -->

    
</div>
</div>