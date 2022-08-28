<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
<table align="center">
  <tr>
    <td>
    <a class="navbar-brand; img-responsive;" href="#">
  		<img src="assets/images/Kop_RSUD.jpg" alt="logo" class="d-inline-block align-top" style="width:900px; height:80px">
	</a>
    </td>
  </tr>
  <tr>  
  	<td align="center">
  		<h3>SURAT PENGANTAR HEMODIALIS</h3>
		<h3>(TRAVELING DIALISIS)</h3>
    </td>    
   </tr>
</table>    

<body>
<table width="100%" border="0">
<tr>
  <td><table width="100%" border="0">
    <tr></tr>
    
    <tr>
      <td width="4%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="26%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="36%">&nbsp;</td>
      <td width="30%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Nama Pasien</td>
      <td>:</td>
      <td><?php echo $p_nama; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Umur</td>
      <td>:</td>
      <td><?php echo $nama_lengkap; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $p_jkelamin; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Alamat</td>
      <td>:</td>
      <td><?php echo $p_alamat; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Diagnosa</td>
      <td>:</td>
      <td><?php echo $h_diagnosa; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Hemodialisis Pertama</td>
      <td>:</td>
      <td><?php echo $h_pertama; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Hemodialisis Terakhir</td>
      <td>:</td>
      <td><?php echo $h_terakhir; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Frekuensi Hemodialisis</td>
      <td>:</td>
      <td><?php echo $h_frekuensi; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Mesin Hemodialisis</td>
      <td>:</td>
      <td><?php echo $h_mesin; ?></td>
      <td>&nbsp;</td>
    </tr> <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Dialiser</td>
      <td>:</td>
      <td><?php echo $h_dialiser; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Dialisat</td>
      <td>:</td>
      <td><?php echo $h_dialisat; ?></td>
      <td>&nbsp;</td>
    </tr> 
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Kecepatan Aliran Dialisat</td>
      <td>:</td>
      <td><?php echo $h_aliran_dialisat; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Kecepatan Aliran Darah</td>
      <td>:</td>
      <td><?php echo $h_aliran_darah; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Lama Hemodialisis</td>
      <td>:</td>
      <td><?php echo $h_lama; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Ultrafiltrasi</td>
      <td>:</td>
      <td><?php echo $h_ultrafiltrasi; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>UF Profiling</td>
      <td>:</td>
      <td><?php echo $h_uf_profiling; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Heparinisasi</td>
      <td>:</td>
      <td><?php echo $h_heparinisasi; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Akses Faskuler</td>
      <td>:</td>
      <td><?php echo $h_akses_faskuler; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>HbsAg</td>
      <td>:</td>
      <td><?php echo $h_hbsag; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Anti HCV</td>
      <td>:</td>
      <td><?php echo $antihcv; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Anti HIV</td>
      <td>:</td>
      <td><?php echo $h_antihiv; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Tanggal Cek Lab</td>
      <td>:</td>
      <td><?php echo $h_tglceklab; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Penyulit HD</td>
      <td>:</td>
      <td><?php echo $h_penyulit_hd; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Berat Badan Kering</td>
      <td>:</td>
      <td><?php echo $h_beratbadan_kering; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Berat Badan Terakhir</td>
      <td>:</td>
      <td><?php echo $h_beratbadan_terakhir; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Tekanan Darah</td>
      <td>:</td>
      <td><?php echo $h_tekanan_darah; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Hasil Laboratorium</td>
      <td>:</td>
      <td><?php echo $h_lab; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Obat-obatan</td>
      <td>:</td>
      <td><?php echo $h_obat; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Tranfusi Terakhir</td>
      <td>:</td>
      <td><?php echo $h_tranfusi_terakhir; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Golongan Darah</td>
      <td>:</td>
      <td><?php echo $h_goldar; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Reaksi Tranfusi</td>
      <td>:</td>
      <td><?php echo $h_reaksi_tranfusi; ?></td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>Keterangan Lain-lain</td>
      <td>:</td>
      <td><?php echo $h_keterangan; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Bontang, <?php echo $tanggal_sekarang; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>DPJP</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&barcode;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong><u>dr. Dyah Sawitri, Sp.PD</u></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>NIP. 196910231997032003</strong></td>
    </tr>
  </table></td>
</tr>
</table>
<script>
		window.print();
	</script>
</body>
    
<tbody>  
</table>

</body>
</html>