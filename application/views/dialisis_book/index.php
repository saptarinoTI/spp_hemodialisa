<div class="row">
	<div class="col-md-12" style="margin-bottom: 30px; display: flex; justify-content: flex-end;">
		<div class="pull pull-left">
			<a href="<?php echo site_url('dialisis_book/tambah'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Dialisis Book</a>
		</div>
	</div>
</div>

<div class="table-responsive">
	<style>
		.table-responsive {
			padding: 0 20px;
		}

		#tabel-dialisis tbody {
			border-bottom: 1px solid #ccc;
		}

		#tabel-dialisis thead th {
			padding: 10px 6px;
			border-bottom: 1px solid #777;
		}

		.tabel-dialisis tbody th,
		.tabel-dialisis tbody tr {
			padding: 10px 6px;
		}

		.tabel-dialisis tbody:nth-child(odd) tr {
			background-color: #F3F4F5 !important;
		}

		.tabel-dialisis tr,
		.tabel-dialisis td {
			padding: 8px 6px;
		}
	</style>

	<table id="tabel-dialisis" class="display tabel-dialisis" width="100%">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th>Data Pasien</th>
				<th>Periksaan</th>
				<th>Pre HD</th>
				<th>Post HD</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php $no = 0;
		foreach ($dialisis_book as $db) : $no++; ?>
			<tbody>
				<tr>
					<th rowspan="5" class="text-center"><?= $no ?></th>
					<td><strong><span style="letter-spacing: 1px;">(<?= $db->db_idpasien ?>)</span> <?= ucwords($db->p_nama) ?></strong></td>
					<th>Berat Badan</th>
					<td><?php echo $db->db_pre_beratbadan; ?></td>
					<td><?php echo $db->db_post_beratbadan; ?></td>
					<td rowspan="5" class="col-md-1">
						<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; row-gap: 10px;">
							<a href="<?php echo site_url('dialisis_book/edit?id=' . $db->db_idpasien . '&tgl=' . $db->db_tanggal); ?>">
								<button type="button" class="btn btn-warning btn-sm">
									<i class="glyphicon glyphicon-edit"></i></button>
							</a>
							<a href="<?php echo site_url('dialisis_book/hapus?kode=' . $db->db_id . '&tgl=' . $db->db_tanggal); ?>">
								<button type="button" class="btn btn-danger btn-sm">
									<i class="glyphicon glyphicon-trash"></i></button>
							</a>
							<!-- <a href="#" title="Hapus Dialisis Book" class="hapus" kode="<?php echo $db->db_idpasien . ' ' . $db->db_tanggal; ?>">
								<button type="button" class="btn btn-danger btn-sm">
									<i class="glyphicon glyphicon-trash"></i></button>
							</a> -->
						</div>
					</td>
				</tr>
				<tr>
					<td><strong>Tanggal</strong> : <?php echo $this->template->IndonesiaTgl($db->db_tanggal); ?></td>
					<th rowspan="2">Tekanan Darah</td>
					<td rowspan="2"><?php echo $db->db_pre_tdarah; ?></td>
					<td rowspan="2"><?php echo $db->db_post_tdarah; ?></td>
				</tr>
				<tr>
					<td><strong>HD Ke</strong> : <?php echo $db->db_hd; ?></td>
				</tr>
				<tr>
					<td rowspan="2"><strong>HF</strong> : <?php echo ucwords(strtolower($db->db_hf)); ?></td>
					<th>BUN</th>
					<td><?php echo $db->db_pre_bun; ?></td>
					<td><?php echo $db->db_post_bun; ?></td>
				</tr>
				<tr>
					<td style="padding: 18px 0;"></td>
					<td style="padding: 18px 0;"></td>
					<td style="padding: 18px 0;"></td>
				</tr>
			</tbody>
		<?php endforeach; ?>
	</table>
</div>

<script>
	$(function() {
		$(".hapus").click(function() {
			var kode = $(this).attr("kode");
			console.log(kode);
			$("#idhapus").val(kode);
			$("#myModal").modal("show");
		});

		$("#konfirmasi").click(function() {
			var kode = $("#idhapus").val();

			$.ajax({
				url: "<?php echo site_url('dialisis_book/hapus'); ?>",
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