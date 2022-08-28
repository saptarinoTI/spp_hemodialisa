<script type="text/javascript">
$(document).ready(function(){
	$(':input:not([type="submit"])').each(function() {
		$(this).focus(function() {
			$(this).addClass('hilite');
		}).blur(function() {
			$(this).removeClass('hilite');
		});
	});	

	$("#tgllahir").datepicker({
		dateFormat:"dd-mm-yy"
    });
	
	$("#id").keypress(function (data)  { 
		if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
	          alert('harus angka');
			  return false;
		}	
	});

	$("#bpjs").keypress(function (data)  { 
		if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
	          alert('harus angka');
			  return false;
		}	
	});

	$("#telpon").keypress(function (data)  { 
		if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
	          alert('harus angka');
			  return false;
		}	
	});
});		
</script>

<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-lg-2 control-label">ID Pasien (RM)</label>
		<div class="col-lg-4">	
			<input type="text" class="form-control" name="id" maxlength="16" id="id"
            value="<?php echo $pasien['p_id'];?>" readonly="readonly">
    	</div>
		<?php echo form_error('id');?>
	</div>


	<div class="form-group">
		<label class="col-lg-2 control-label">Nama Pasien</label>
		<div class="col-lg-6">	
			<input name="nama" type="text" class="form-control" id="nama" 
            value="<?php echo $pasien['p_nama'];?>" maxlength="50">
    	</div>
		<?php echo form_error('nama');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tempat Lahir</label>
		<div class="col-lg-4">	
			<input name="tempatlahir" type="text" class="form-control" id="tempatlahir" 
            value="<?php echo $pasien['p_tempatlahir'];?>" maxlength="30">
    	</div>
		<?php echo form_error('tempatlahir');?>
	</div>    
        
	<div class="form-group">
	  <label class="col-lg-2 control-label">Tanggal Lahir</label>
	  <div class="col-sm-2">
		<input name="tgllahir" type="text" 
         class="form-control datepicker" id="tgllahir" 
         value="<?php echo $this->template->IndonesiaTgl($pasien['p_tgllahir'])?>" maxlength="10">
	  </div>
	</div> 
		
	<div class="form-group">
		<label class="col-lg-2 control-label">Jenis Kelamin</label>
		<div class="col-lg-2">       
           	<select class="form-control" name="jkelamin" id="jkelamin" required>
				<option value="<?php echo $pasien['p_jkelamin'];?>">
					<?php echo $pasien['p_jkelamin'];?></option>
				<option value='L'>Laki-Laki</option>
                <option value='P' selected="selected">Perempuan</option>
			</select>
    	</div>
		<?php echo form_error('Jenis Kelamin');?>
    </div>

	<div class="form-group">
	  <label class="col-lg-2 control-label">Alamat</label>
		<div class="col-lg-6">	
			<input type="text" class="form-control" name="alamat" maxlength="50" 
            	value="<?php echo $pasien['p_alamat'];?>">
    	</div>
		<?php echo form_error('Alamat');?>
	</div>

	<div class="form-group">
	  <label class="col-lg-2 control-label">Nomor WA/HP</label>
		<div class="col-lg-2">	
			<input type="text" class="form-control" name="telpon" id="telpon" maxlength="12" 
            value="<?php echo $pasien['p_telpon'];?>">
    	</div>
		<?php echo form_error('Telpon');?>
	</div>

	<div class="form-group">
	  <label class="col-lg-2 control-label">Login Password</label>
		<div class="col-lg-2">	
			<input type="text" class="form-control" name="password" maxlength="10" id="password"
            value="<?php echo $pasien['p_password'];?>">
    	</div>
		<?php echo form_error('Password');?>
	</div>            

	<div class="form-group">
		<label class="col-lg-2 control-label"></label>
		<div class="col-lg-4">	
			<button class="btn btn-success"><i class="glyphicon glyphicon-saved"></i>Simpan</button>
			<a href="<?php echo site_url('pasien');?>" class="btn btn-default">Kembali</a>
		</div>
	</div>
</form>