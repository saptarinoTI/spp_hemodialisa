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
			<input type="text" class="form-control" name="id" maxlength="16" required id="id">
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
			</select>
		</div>
		<?php echo form_error('hari'); ?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tanggal Hemodialisa</label>
		<div class="col-sm-2">
			<form>
				<input type="date" value="yyyy-mm-dd" />
			</form>

			<?php echo form_error('tgl'); ?>
		</div>

		<div class="form-group">
			<label class="col-lg-2 control-label">Jam Hemodialisa</label>
			<div class="col-lg-2">
				<select class="form-control" name="jamhd" id="jamhd">
					<option value='8'>08.00</option>
					<option value='9'>09.00</option>
					<option value='10'>10.00</option>
					<option value='11'>11.00</option>
					<option value='12'>12.00</option>
					<option value='13'>13.00</option>
					<option value='14'>14.00</option>
					<option value='15'>15.00</option>
					<option value='16'>16.00</option>
				</select>
			</div>
			<?php echo form_error('jam'); ?>
		</div>

		<div class="form-group">
			<label class="col-lg-2 control-label">Shift</label>
			<div class="col-lg-6">
				<select class="form-control" name="shift" id="shift">
					<option value='P'>Pagi</option>
					<option value='S'>Sore</option>
				</select>
			</div>
			<?php echo form_error('shift'); ?>
		</div>

		<div class="form-group">
			<label class="col-lg-2 control-label">Keterangan</label>
			<div class="col-lg-2">
				<select class="form-control" name="keterangan" id="keterangan">

					<option value='2'>Rutin 2x/minggu</option>
					<option value='3'>Rutin 3x/minggu</option>
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