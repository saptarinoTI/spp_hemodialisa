<form class="form-horizontal" action="" method="post">
<?php echo $message;?>
	<div class="form-group">
		<label class="col-lg-3 control-label">Nama Perusahaan</label>
		<div class="col-lg-3">
			<input type="text" value="<?php echo isset($identitas['nm_perusahaan'])?$identitas['nm_perusahaan']:'';?>" name="perusahaan" class="form-control">
		</div>
		<?php echo form_error('perusahaan');?>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label">Nama Pemilik</label>
		<div class="col-lg-3">
			<input type="text" value="<?php echo isset($identitas['pemilik'])?$identitas['pemilik']:'';?>" name="pemilik" class="form-control">
		</div>
		<?php echo form_error('pemilik');?>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label">Alamat</label>
		<div class="col-lg-3">
			<input type="text" value="<?php echo isset($identitas['alamat'])?$identitas['alamat']:'';?>" name="alamat" class="form-control">
		</div>
		<?php echo form_error('alamat');?>
	</div>

	<div class="form-group">
		<label class="col-lg-3 control-label"></label>
		<div class="col-lg-3">
			<button class="btn btn-success"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
		</div>
	</div>
</form>