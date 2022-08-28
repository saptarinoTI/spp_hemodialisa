<div class="row">
	<div class="col-md-12" style="margin-bottom: 30px; display: flex; justify-content: flex-end;">
		<div class="pull pull-left">
			<a href="<?php echo site_url('hemodialis/tambah'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Hemodialis</a>
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
				<th>No.</th>
				<th>ID Pasien</th>
				<th>Nama Pasien</th>
				<th>Umur</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No.Telepon</th>
			</tr>
		</thead>
		<?php $no = 0;
		foreach ($hemodialis as $hemodialis) : $no++; ?>
			<tr>
				<td>
					<div class="btn-group">
						<!-- <a href="#" title="Edit Form" class="edit" kode="<?php echo $hemodialis->h_idpasien . ' ' . $hemodialis->h_id; ?>">
						<button type="button" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
					</a> -->
						<a href="<?php echo site_url('hemodialis/edit?idp=' . $hemodialis->h_idpasien . '&id=' . $hemodialis->h_id); ?>">
							<button type="button" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
						</a>
						<a href="#" title="Hapus Form" class="hapus" kode="<?php echo $hemodialis->h_idpasien . ' ' . $hemodialis->h_id; ?>">
							<button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
						</a>
					</div>
				</td>
				<td><?php echo $no; ?></td>
				<td><?php echo $hemodialis->h_idpasien; ?></td>
				<td><?php echo ucwords($hemodialis->h_nama_pasien); ?></td>
				<td><?php echo $hemodialis->h_umur; ?> Tahun</td>
				<td><?php echo ucwords($hemodialis->h_jkelamin); ?></td>
				<td><?php echo ucwords($hemodialis->h_alamat); ?></td>
				<td><?php echo $hemodialis->p_telpon; ?></td>
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
				url: "<?php echo site_url('hemodialis/hapus'); ?>",
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