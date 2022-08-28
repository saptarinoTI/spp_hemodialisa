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

		$("#tgl_berikut").datepicker({
			dateFormat: "dd-mm-yy"
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
		<div class="col-lg-4">
			<input type="text" class="form-control" name="idpasien" maxlength="16" required id="idpasien" value="<?= $jadwal['j_idpasien'] ?>" readonly>
		</div>
		<?php echo form_error('idpasien'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Hari</label>
		<div class="col-lg-2">
			<select class="form-control" name="hari" id="hari">
				<option value='Senin' <?= ($jadwal['j_hari'] == 'Senin') ? 'selected' : '' ?>>Senin</option>
				<option value='Selasa' <?= ($jadwal['j_hari'] == 'Selasa') ? 'selected' : '' ?>>Selasa</option>
				<option value='Rabu' <?= ($jadwal['j_hari'] == 'Rabu') ? 'selected' : '' ?>>Rabu</option>
				<option value='Kamis' <?= ($jadwal['j_hari'] == 'Kamis') ? 'selected' : '' ?>>Kamis</option>
				<option value='Jumat' <?= ($jadwal['j_hari'] == 'Jumat') ? 'selected' : '' ?>>Jumat</option>
				<option value='Sabtu' <?= ($jadwal['j_hari'] == 'Sabtu') ? 'selected' : '' ?>>Sabtu</option>
			</select>
		</div>
		<?php echo form_error('hari'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tanggal Hemodialisa</label>
		<div class="col-sm-2">
			<input type="date" name="tgl" class="form-control"  value="<?= $jadwal['j_tgl'] ?>">
		</div>
		<?php echo form_error('tgl'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Shift</label>
		<div class="col-lg-6">
			<select class="form-control" name="shift" id="shift">
				<option value='Pagi' <?= ($jadwal['j_shift'] == 'Pagi') ? 'selected' : '' ?>>Pagi</option>
				<option value='Sore' <?= ($jadwal['j_shift'] == 'Sore') ? 'selected' : '' ?>>Sore</option>
			</select>
		</div>
		<?php echo form_error('shift'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Keterangan</label>
		<div class="col-lg-2">
			<select class="form-control" name="keterangan" id="keterangan">
				<option value=''> Frekuensi HD </option>
				<option value='Rutin 2x/minggu' <?= ($jadwal['j_keterangan'] == 'Rutin 2x/minggu') ? 'selected' : '' ?>>Rutin 2x/minggu</option>
				<option value='Rutin 3x/minggu' <?= ($jadwal['j_keterangan'] == 'Rutin 3x/minggu') ? 'selected' : '' ?>>Rutin 3x/minggu</option>
			</select>
		</div>
		<?php echo form_error('keterangan'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-4">
			<button type="submit" name="btn" class="btn btn-success"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
			<a href="<?php echo site_url('jadwal'); ?>" class="btn btn-default">Kembali</a>
		</div>
	</div>
</form>