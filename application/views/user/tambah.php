<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-lg-2 control-label">Username </label>
		<div class="col-lg-3">	
			<input type="text" class="form-control" name="user" placeholder="Username" maxlength="15"  required>
		</div>
		<?php echo form_error('user');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Password</label>
		<div class="col-lg-3">	
			<input type="text" class="form-control" name="password" placeholder="Password"  maxlength="10" required>
		</div>
		<?php echo form_error('password');?>
	</div>

    <div class="form-group">
		<label class="col-lg-2 control-label">Level Pemakai</label>
		<div class="col-lg-3">       
           	<select class="form-control" name="level" id="level" required>
				<option value='' disabled selected style='display:none; 
            	color:lightgray;'> Pilih Level </option>
                <option value='admin'>Admin</option>
				<option value='user'>User</option>
			</select>
    	</div>
		<?php echo form_error('Level Pemakai');?>
    </div>

    <div class="form-group">
      <label class="col-lg-2 control-label">Foto</label>
      <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 foto-profil">
          <input type="file" name="foto" class="custom-file-input" multiple />
          <label class="clues">Foto setengah badan & rapi (jpg, jpeg, png) & maks 100 kb</label>
      </div>
    </div>        

	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-4">	
			<button class="btn btn-success"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
			<a href="<?php echo site_url('user');?>" class="btn btn-default">Kembali</a>
		</div>
	</div>
</form>