<script type="text/javascript">
	$(document).ready(function() {
		$(':input:not([type="submit"])').each(function() {
			$(this).focus(function() {
				$(this).addClass('hilite');
			}).blur(function() {
				$(this).removeClass('hilite');
			});
		});

		$("#tgl").datepicker({
			dateFormat: "dd-mm-yy"
		});

		$("#transfusi_tgl").datepicker({
			dateFormat: "dd-mm-yy"
		});

		$("#hid").keypress(function(data) {
			if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
				alert('harus angka');
				return false;
			}
		});

		$("#idpasien").keypress(function(data) {
			if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
				alert('harus angka');
				return false;
			}
		});

	});
</script>

<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-lg-2 control-label">ID Pasien (RM)</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="idpasien" maxlength="16" required id="idpasien">
			<!-- <select name="idpasien" id="idpasien" class="form-control">
				<option>Pilih salah satu ...</option>
				<?php foreach ($pasien as $p) : ?>
					<option value="<?= $p->p_id ?>"><?= $p->p_id ?></option>
				<?php endforeach; ?>
			</select> -->
		</div>
		<?php echo form_error('idpasien'); ?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Nama Pasien</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="nama_pasien" maxlength="50" id="nama_pasien">
		</div>
		<?php echo form_error('nama_pasien'); ?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Umur</label>
		<div class="col-lg-1">
			<input type="number" class="form-control" name="umur" maxlength="10" id="umur">
		</div>
		<?php echo form_error('umur'); ?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Jenis Kelamin</label>
		<div class="col-lg-2">
			<select class="form-control" name="jkelamin" id="jkelamin">
				<option value=''> L / P </option>
				<option value='Laki-laki'>Laki-laki</option>
				<option value='Perempuan'>Perempuan</option>
			</select>
		</div>
		<?php echo form_error('jkelamin'); ?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Alamat</label>
		<div class="col-lg-7">
			<input type="text" class="form-control" name="alamat" maxlength="100" id="alamat">
		</div>
		<?php echo form_error('alamat'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Diagnosa</label>
		<div class="col-lg-2">
			<select class="form-control" name="diagnosa" id="diagnosa">
				<option value=''> Diagnosa </option>
				<option value='ESRD'>ESRD</option>
				<option value='Akut ON CKD'>Akut ON CKD</option>
				<option value='Pre OP'>Pre OP</option>
			</select>
		</div>
		<?php echo form_error('diagnosa'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Hemodialisis Pertama</label>
		<input type="date" value="yyyy-mm-dd" name="pertama" />
		<?php echo form_error('pertama'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Hemodialisis Terakhir</label>
		<input type="date" value="yyyy-mm-dd" name="terakhir" />
		<?php echo form_error('terakhir'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Frekuensi Hemodialisis</label>
		<div class="col-lg-2">
			<select class="form-control" name="frekuensi" id="frekuensi">
				<option value=''> Per Minggu </option>
				<option value='1x/minggu'>1x/minggu</option>
				<option value='2x/minggu'>2x/minggu</option>
				<option value='3x/minggu'>3x/minggu</option>
			</select>
		</div>
		<?php echo form_error('frekuensi'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Mesin</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="mesin" maxlength="25" id="mesin" value="Fresinius">
		</div>
		<?php echo form_error('mesin'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Dialiser</label>
		<div class="col-lg-3">
			<input type="text" class="form-control" name="dialiser" maxlength="25" id="dialiser">
		</div>
		<?php echo form_error('dialiser'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Dialisat</label>
		<div class="col-lg-2">
			<input type="checkbox" name="dialisat" value="Bicarbonat" /> Bicarbonat
			<input type="checkbox" name="dialisat" value="Asetat" /> Asetat
			</select>
		</div>
		<?php echo form_error('dialisat'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Kecepatan Aliran Dialisat</label>
		<div class="col-lg-2">
			<select class="form-control" name="aliran_dialisat" id="aliran_dialisat">
				<option value=''> Quick Dialysis Flow </option>
				<option value='500 ml/menit'>500 ml/menit</option>
				<option value='300 ml/menit'>300 ml/menit</option>
			</select>
		</div>
		<?php echo form_error('aliran_dialisat'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Kecepatan Aliran Darah</label>
		<div class="col-lg-2">
			<select class="form-control" name="aliran_darah" id="aliran_darah">
				<option value=''> Quick Blood </option>
				<option value='-150 ml/menit'>-150 ml/menit</option>
				<option value='150-199 ml/menit'>150-199 ml/menit</option>
				<option value='200-249 ml/menit'>200-249 ml/menit</option>
				<option value='+250 ml/menit'>+250 ml/menit</option>
			</select>
		</div>
		<?php echo form_error('aliran_darah'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Lama Hemodialisis</label>
		<div class="col-lg-2">
			<select class="form-control" name="lama" id="lama">
				<option value=''> Time Per Dialysis </option>
				<option value='-3 jam'>-3 jam</option>
				<option value='3-4 jam'>3-4 jam</option>
				<option value='+4 jam'>+4 jam</option>
			</select>
		</div>
		<?php echo form_error('lama'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Ultrafiltrasi</label>
		<div class="col-lg-7">
			<input type="text" class="form-control" name="ultrafiltrasi" maxlength="50" id="ultrafiltrasi">
		</div>
		<?php echo form_error('ultrafiltrasi'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">UF Profiling</label>
		<div class="col-lg-7">
			<input type="text" class="form-control" name="uf_profiling" maxlength="50" id="uf_profiling">
		</div>
		<?php echo form_error('uf_profiling'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Heparinisasi</label>
		<div class="col-lg-4">
			<input type="checkbox" name="heparinisasi" /> Kontinue
			<input type="checkbox" name="heparinisasi" /> Intermitten
			<input type="checkbox" name="heparinisasi" /> LMWH
			<input type="checkbox" name="heparinisasi" /> FreeHeparin
		</div>
		<?php echo form_error('heparinisasi'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Akses Faskuler</label>
		<div class="col-lg-2">
			<select class="form-control" name="akses_faskuler" id="akses_faskuler">
				<option value=''> Akses Faskuler </option>
				<option value='Femoral'>Femoral</option>
				<option value='Cimino'>Cimino</option>
				<option value='Jugular Cath'>Jugular Cath</option>
				<option value='Subclavia Cath'>Subclavia Cath</option>
			</select>
		</div>
		<?php echo form_error('akses_faskuler'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">HbsAg</label>
		<div class="col-lg-2">
			<select class="form-control" name="hbsag" id="hbsag">
				<option value=''> + / - </option>
				<option value='Positif'>Positif</option>
				<option value='Negatif'>Negatif</option>
			</select>
		</div>
		<?php echo form_error('hbsag'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Anti HCV</label>
		<div class="col-lg-2">
			<select class="form-control" name="antihcv" id="antihcv">
				<option value=''> + / - </option>
				<option value='Positif'>Positif</option>
				<option value='Negatif'>Negatif</option>
			</select>
		</div>
		<?php echo form_error('antihcv'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Anti HIV</label>
		<div class="col-lg-2">
			<select class="form-control" name="antihiv" id="antihiv">
				<option value=''> + / - </option>
				<option value='Positif'>Positif</option>
				<option value='Negatif'>Negatif</option>
			</select>
		</div>
		<?php echo form_error('antihiv'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tanggal Pemeriksaan</label>
		<div class="col-lg-4">
			<input type="date" class="form-control" name="tglceklab" maxlength="12" id="tglceklab">
		</div>
		<?php echo form_error('tglceklab'); ?>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Penyulit HD</label>
		<div class="col-lg-4">
			<input type="text" class="form-control" name="penyulit_hd" maxlength="50" id="penyulit_hd">
		</div>
		<?php echo form_error('penyulit_hd'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Berat Badan Kering</label>
		<div class="col-lg-1">
			<input type="text" class="form-control" name="beratbadan_kering" maxlength="5" id="beratbadan_kering">
		</div>
		<?php echo form_error('beratbadan_kering'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Berat Badan Terakhir</label>
		<div class="col-lg-1">
			<input type="text" class="form-control" name="beratbadan_akhir" maxlength="5" id="beratbadan_akhir">
		</div>
		<?php echo form_error('beratbadan_akhir'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tekanan Darah</label>
		<div class="col-lg-2">
			<input type="text" class="form-control" name="tekanan_darah" maxlength="8" id="tekanan_darah">
		</div>
		<?php echo form_error('tekanan_darah'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Hasil Laboratorium</label>
		<div class="col-lg-1">
			HB<input type="number" class="form-control" name="lab_hb" id="lab_hb" maxlength="4">
			Ureum<input type="number" class="form-control" name="lab_ureum" id="lab_ureum" maxlength="4">
			Kreatinin<input type="number" class="form-control" name="lab_kreatinin" id="lab_kreatinin" maxlength="4">
			Natrium<input type="number" class="form-control" name="lab_natrium" id="lab_natrium" maxlength="4">
			Kalium<input type="number" class="form-control" name="lab_kalium" id="lab_kalium" maxlength="4">
			Prot/Total<input type="number" class="form-control" name="lab_prot/total" id="lab_prot/total" maxlength="4">
			Albumin<input type="number" class="form-control" name="lab_albumin" id="lab_albumin" maxlength="4">
		</div>
		<?php echo form_error('Hasil_Laboratorium'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Obat-obatan</label>
		<div class="col-lg-5">
			<input type="text" class="form-control" name="obat" maxlength="400" id="obat">
		</div>
		<?php echo form_error('obat'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tranfusi Terakhir</label>
		<div class="col-sm-2">
			<input type="date" value="yyyy-mm-dd" name="tranfusi_terakhir" />
		</div>
		<?php echo form_error('tranfusi_terakhir'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Golongan Darah</label>
		<div class="col-lg-1">
			<input type="text" class="form-control" name="goldar" maxlength="10" id="goldar">
		</div>
		<?php echo form_error('goldar'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Reaksi Tranfusi</label>
		<div class="col-lg-7">
			<input type="text" class="form-control" name="reaksi_transfusi" maxlength="100" id="reaksi_transfusi">
		</div>
		<?php echo form_error('reaksi_transfusi'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Keterangan</label>
		<div class="col-lg-7">
			<input type="text" class="form-control" name="keterangan" maxlength="150" id="keterangan">
		</div>
		<?php echo form_error('keterangan'); ?>
	</div>

	<div class="form-group">
		<button name="btn" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
		<a href="<?php echo site_url('hemodialis'); ?>" class="btn btn-default">Kembali</a>
	</div>
</form>