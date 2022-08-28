<div class="row">
	<div class="col-md-12" style="margin-bottom: 30px; display: flex; justify-content: flex-end;">
		<div class="pull pull-left">
			<a href="<?php echo site_url('pasien/tambah'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Tambah Pasien</a>
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
				<th>No RM</th>
				<th>Nama Pasien</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Telepon</th>
			</tr>
		</thead>
		<?php $no = 0;
		foreach ($pasien as $pasien) : $no++; ?>
			<tr>
				<td>
					<div class="btn-group">
						<a href="<?php echo site_url('pasien/edit?id=' . $pasien->p_id); ?>">
							<button type="button" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
						</a>
						<a href="#" class="hapus" kode="<?php echo $pasien->p_id; ?>">
							<button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
						</a>
					</div>
				</td>
				<td><?php echo $no; ?></td>
				<td><?php echo $pasien->p_id; ?></td>
				<td><?php echo $pasien->p_nama; ?></td>
				<td><?php echo $pasien->p_tempatlahir; ?>,<?php echo $this->template->IndonesiaTgl($pasien->p_tgllahir) ?></td>
				<td><?php
						$thn = substr($pasien->p_tgllahir, 0, 4);
						$umur = date('Y') - $thn;
						echo $umur; ?>
				</td>
				<td><?php echo $pasien->p_alamat; ?></td>
				<td><?php echo $pasien->p_telpon; ?></td>
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
				url: "<?php echo site_url('pasien/hapus'); ?>",
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