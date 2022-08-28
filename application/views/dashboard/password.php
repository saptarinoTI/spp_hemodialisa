<form class="form-horizontal" action="" method="post">
<?php echo $message;?>
	<div class="form-group">
		<label class="col-lg-3 control-label">Password Lama</label>
		<div class="col-lg-3">
			<input type="password" name="lama" class="form-control" placeholder="Password Lama"  required>
		</div>
		<?php echo form_error('lama');?>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label">Password Baru</label>
		<div class="col-lg-3">
			<input type="password" name="baru" class="form-control" placeholder="Password Baru"  required>
		</div>
		<?php echo form_error('baru');?>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label">Konfirmasi Password</label>
		<div class="col-lg-3">
			<input type="password" name="konfirmasi" class="form-control" placeholder="Konfirmasi Password"  required>
		</div>
		<?php echo form_error('konfirmasi');?>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label"></label>
		<div class="col-lg-3">
			<button class="btn btn-success"><i class="glyphicon glyphicon-saved"></i> Update</button>
		</div>
	</div>
</form>