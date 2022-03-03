<style>
	.form_cetak {
		padding:5px;
		border:1px solid;
		width:400px;
		background-color:#FFF;	
		font-family:Tahoma, Geneva, sans-serif;
	}

	.form_cetak strong{
		font-size:11px;	
	}
	.form_cetak .header {
		width:390px;
		height:120px;
		background:url({{asset('headerformulir.png')}});
		margin-left:-3px;
		margin-bottom:25px;
	}
	.tabel_cetak {
		font-size:11px;	
		height:300px;	
		width:350px;
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
</style>

<script type="text/javascript">
	window.print() 
</script>
<div class="form_cetak">
	<div class="header">
	<img src="{{ asset('headerformulir.png') }}">
	</div>
        
	<table class="tabel_cetak" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<th>Nomor Pendaftaran</th>
			<td width="2">:</td>
			<td> <strong>{{ $data->no_formulir }}</strong><div class="borderspace"></div></td>
		</tr>
		<tr>
			<th>Nama Peserta</th>
			<td>:</td>
			<td><strong>{{ $data->nama }}</strong> <div class="borderspace"></div></td>
		</tr>
		<tr>
			<th>Asal Sekolah</th>
			<td>:</td>
			<td><strong>{{ $data->nama_sekolah }} {{$data->kab_sekolah}}</strong><div class="borderspace"></div></td>
        </tr>
		<tr>
			<th>Jurusan Yang Dipilih</th>
			<td>:</td>
			<td><strong>{{ $data->Jurusan->nama }}</strong><div class="borderspace"></div></td>
        </tr>
		
		<tr>
			<td colspan="2" valign="bottom" align="center" height="30">Tanda Tangan<br><br><br><br><br>(.........................................)<br>Orang Tua
			<td align="right" valign="bottom">
				{{-- <img src='{{ asset('storage/'.$data->foto) }}' width='100' height='150' style="object-fit:cover; object-position:center;"> --}}
				<img src='{{ asset('tes.jpeg') }}' width='100' height='150' style="object-fit:cover; object-position:center;">
				
					{{-- echo"<div class='foto'>Foto</div>"; --}}
			
			</td>
		</tr>
	</table>
    
</div>
</div>
 