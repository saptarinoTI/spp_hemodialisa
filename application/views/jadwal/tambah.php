<script type="text/javascript">
	$(document).ready(function() {
		$(':input:not([type="submit"])').each(function() {
			$(this).focus(function() {
				$(this).addClass('hilite');
			}).blur(function() {
				$(this).removeClass('hilite');
			});
		});

		$("#tgllahir").datepicker({
			dateFormat: "dd-mm-yy"
		});

		$("#id").keypress(function(data) {
			if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
				alert('harus angka');
				return false;
			}
		});

		$("#bpjs").keypress(function(data) {
			if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
				alert('harus angka');
				return false;
			}
		});

		$("#telpon").keypress(function(data) {
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
			<select name="idpasien" id="idpasien" class="form-control">
				<option value="" selected>Pilih Pasien ...</option>
				<?php foreach ($jadwal as $j) : ?>
					<option value="<?= $j->p_id ?>"><?= $j->p_id . ' - ' . $j->p_nama  ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<?php echo form_error('id'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Hari</label>
		<div class="col-lg-2">
			<select class="form-control" name="hari" id="hari">
				<option value='Senin'>Senin</option>
				<option value='Selasa'>Selasa</option>
				<option value='Rabu'>Rabu</option>
				<option value='Kamis'>Kamis</option>
				<option value='Jumat'>Jumat</option>
				<option value='Sabtu'>Sabtu</option>
			</select>
		</div>
		<?php echo form_error('hari'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tanggal Hemodialisa</label>
		<div class="col-lg-2">
			<input type="date" name="tgl" class="form-control" />
		</div>
		<?php echo form_error('tgl'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Shift</label>
		<div class="col-lg-6">
			<select class="form-control" name="shift" id="shift">
				<option value='Pagi'>Pagi</option>
				<option value='Sore'>Sore</option>
			</select>
		</div>
		<?php echo form_error('shift'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Keterangan</label>
		<div class="col-lg-2">
			<select class="form-control" name="keterangan" id="keterangan">
				<option value=''> Frekuensi HD </option>
				<option value='Rutin 2x/minggu'>Rutin 2x/minggu</option>
				<option value='Rutin 3x/minggu'>Rutin 3x/minggu</option>
			</select>
		</div>
		<?php echo form_error('keterangan'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-4">
			<button class="btn btn-success"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
			<a href="<?php echo site_url('jadwal'); ?>" class="btn btn-default">Kembali</a>
		</div>
	</div>
</form>