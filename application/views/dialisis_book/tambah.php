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

<div style="padding: 30px;">
	<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>Pasien</label>
			</div>
			<div class="col-lg-8">
				<select name="id" id="id" class="form-control" required>
					<?php foreach ($pasien as $p) : ?>
						<option value="<?= $p->p_id ?>"><?= $p->p_id . ' - ' . ucwords($p->p_nama) ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>Tanggal</label>
			</div>
			<div class="col-lg-8">
				<input type="date" class="form-control" name="tanggal" required>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>HD Ke</label>
			</div>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="hd" required>
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
				<input type="text" class="form-control" name="pre_beratbadan" required>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>Berat Badan Post HD</label>
			</div>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="post_beratbadan" required>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>Tekanan Darah Pre HD</label>
			</div>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="pre_tdarah" required>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>Tekanan Darah Post HD</label>
			</div>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="post_tdarah" required>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>BUN Pre HD</label>
			</div>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="pre_bun" required>
			</div>
		</div>

		<div class="mx-3 row">
			<div class="col-lg-4">
				<label>BUN Post HD</label>
			</div>
			<div class="col-lg-8">
				<input type="text" class="form-control" name="post_bun" required>
			</div>
		</div>

		<div class="mx-3" style="display: flex; justify-content: center; align-items: center;">
			<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
			<a href="<?php echo site_url('dialisis_book'); ?>" class="btn btn-default">Kembali</a>
		</div>
	</form>
</div>