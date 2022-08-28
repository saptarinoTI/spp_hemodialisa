<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
<?php echo $message;?>
	<div class="form-group">
		<label class="col-lg-2 control-label">Username</label>
		<div class="col-lg-3">	
			<input type="text" readonly="readonly" value="<?php echo $user['user_namauser'];?>" class="form-control" name="user">
		</div>
		<?php echo form_error('user');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Password</label>
		<div class="col-lg-3">	
			<input type="text" value="<?php echo $user['user_password'];?>"
            class="form-control" name="password" placeholder="Password"  maxlength="10" required>
		</div>
		<?php echo form_error('password');?>
	</div>
    
    <div class="form-group">
		<label class="col-lg-2 control-label">Level Pemakai</label>
		<div class="col-lg-3">       
			<select class="form-control" name="level" id="level" required>
            	<option  value="<?php echo $user['user_level'];?>"><?php echo $user['user_level'];?></option>
            	<option value='admin'>Admin</option>
				<option value='user'>User</option>
			</select>
    	</div>
		<?php echo form_error('Level Pemakai');?>
    </div>  

    <div class="form-group">
      <label class="col-lg-2 control-label">Foto</label>
      <div class="col-md-2" style="padding-left: 0px;  padding-right: 0px;">
	   	   <img src="<?php echo base_url('assets/images/'.$user['user_foto'])?>"
    	   class="img-responsive"/>
	  </div>      
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