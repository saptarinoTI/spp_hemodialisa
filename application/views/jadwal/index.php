<div class="row">
	<div class="col-md-12" style="margin-bottom: 30px; display: flex; justify-content: flex-end;">
		<div class="pull pull-left">
			<a href="<?php echo site_url('jadwal/tambah'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Jadwal</a>
		</div>
	</div>

	<div class="col-md-8">
	</div>

</div>

<div class="table-responsive">
	<table id="example2" class="display table table-striped" style="width:100%">
		<thead>
			<tr>
				<th>Aksi</th>
				<th>No</th>
				<th>ID Pasien</th>
				<th>Hari, Tanggal HD</th>
				<th>Shift</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<?php $no = 0;
		foreach ($jadwal as $jadwal) : $no++; ?>
			<tr>
				<td>
					<div class="btn-group">
						<a href="<?php echo site_url('jadwal/edit?id=' . $jadwal->j_idpasien . ' ' . $jadwal->j_tgl); ?>">
							<button type="button" name="btn" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
						</a>
						<a href="#" title="Hapus Jadwal" class="hapus" kode="<?php echo $jadwal->j_idpasien . ' ' . $jadwal->j_tgl; ?>">
							<button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
						</a>
					</div>
				</td>
				<td><?php echo $no; ?></td>
				<td><?php echo $jadwal->j_idpasien . ' ' . ucwords($jadwal->p_nama); ?></td>
				<td><?php echo ucwords($jadwal->j_hari) . ', ' . $this->template->IndonesiaTgl($jadwal->j_tgl . ' ' .
							$jadwal->j_hari) ?></td>
				<td><?php echo ucwords($jadwal->j_shift) ?></td>
				<td><?php echo ucwords($jadwal->j_keterangan) ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<script>
	$(function() {
		$(".hapus").click(function() {
			var kode = $(this).attr("kode");
			$("#idhapus").val(kode);
			$("#myModal").modal("show");
		});

		$("#konfirmasi").click(function() {
			var kode = $("#idhapus").val();

			$.ajax({
				url: "<?php echo site_url('jadwal/hapus'); ?>",
				type: "POST",
				data: "kode=" + kode,
				cache: false,
				success: function(html) {
					location.reload();
				}
			})
		})
	});
</script>