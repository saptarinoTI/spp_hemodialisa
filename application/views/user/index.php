<div class="row">
	<div class="col-md-12" style="margin-bottom: 30px; display: flex; justify-content: flex-end;">
		<div class="pull pull-left">
			<a href="<?php echo site_url('user/tambah'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add New User</a>
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
				<th>Foto</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
			</tr>
		</thead>
		<?php $no = 0;
		foreach ($user as $user) : $no++; ?>
			<tr>
				<td>
					<div class="btn-group">
						<a href="<?php echo site_url('user/edit?id=' . $user->user_namauser); ?>">
							<button type="button" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
						</a>
						<a href="#" class="hapus" kode="<?php echo $user->user_namauser; ?>">
							<button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
						</a>
					</div>
				</td>
				<td><?php echo $no; ?></td>
				<td>
					<div class="col-md-2" style="padding-left: 0px;  padding-right: 0px;">
						<img src="<?php echo base_url('assets/images/' . $user->user_foto) ?>" width="60px" />
					</div>
				</td>
				<td><?php echo $user->user_namauser; ?></td>
				<td><?php echo $user->user_password; ?></td>
				<td><?php echo ucwords($user->user_level); ?></td>
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
				url: "<?php echo site_url('user/hapus'); ?>",
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