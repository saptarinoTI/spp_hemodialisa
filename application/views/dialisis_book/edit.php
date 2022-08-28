<style>
	.mx-3 {
		margin: 20px 0;
	}
</style>
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
	<input type="hidden" name="id" value="<?= $dialisis_book['db_id'] ?>">
	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>Pasien</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" value="<?= $dialisis_book['db_idpasien'] ?>" readonly>
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>Tanggal</label>
		</div>
		<div class="col-lg-8">
			<input type="date" class="form-control" name="tanggal" required value="<?= $dialisis_book['db_tanggal'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>HD Ke</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="hd" require value="<?= $dialisis_book['db_hd'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>HF</label>
		</div>
		<div class="col-lg-8">
			<!-- <input type="text" class="form-control" name="hf" required> -->
			<select name="hf" id="hf" class="form-control">
				<option value="baru">Baru</option>
				<option value="reuse">ReUse</option>
			</select>
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>Berat Badan Pre HD</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="pre_beratbadan" required value="<?= $dialisis_book['db_pre_beratbadan'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>Berat Badan Post HD</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="post_beratbadan" required value="<?= $dialisis_book['db_post_beratbadan'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>Tekanan Darah Pre HD</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="pre_tdarah" required value="<?= $dialisis_book['db_pre_tdarah'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>Tekanan Darah Post HD</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="post_tdarah" required value="<?= $dialisis_book['db_post_tdarah'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>BUN Pre HD</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="pre_bun" required value="<?= $dialisis_book['db_pre_bun'] ?>">
		</div>
	</div>

	<div class="mx-3 row">
		<div class="col-lg-4">
			<label>BUN Post HD</label>
		</div>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="post_bun" required value="<?= $dialisis_book['db_post_bun'] ?>">
		</div>
	</div>

	<div class="mx-3">
		<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
		<a href="<?php echo site_url('dialisis_book'); ?>" class="btn btn-default">Kembali</a>
	</div>
</form>