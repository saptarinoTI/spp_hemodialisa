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
			<input type="text" class="form-control" name="id" maxlength="16"  required id="id">
    	</div>
		<?php echo form_error('id');?>
	</div>


	<div class="form-group">
		<label class="col-lg-2 control-label">Nama Pasien</label>
		<div class="col-lg-6">	
			<input type="text" class="form-control" name="nama" maxlength="50" required id="nama">
    	</div>
		<?php echo form_error('nama');?>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">Tempat Lahir</label>
		<div class="col-lg-4">	
			<input type="text" class="form-control" name="tempatlahir" maxlength="30" required id="tempatlahir">
    	</div>
		<?php echo form_error('tempatlahir');?>
	</div>    
        
	<div class="form-group">
	  <label class="col-lg-2 control-label">Tanggal Lahir</label>
	  <div class="col-sm-2">
		<input type="text" name="tgllahir" id="tgllahir" maxlength="10" 
         class="form-control datepicker" placeholder="Tanggal lahir" required>
	  </div>
	  </div>
		
	<div class="form-group">
		<label class="col-lg-2 control-label">Jenis Kelamin</label>
		<div class="col-lg-2">       
           	<select class="form-control" name="jkelamin" id="jkelamin" required>
				<option value='' disabled style='display:none; 
            	color:lightgray;'> Pilih L/P </option>
				<option value='L'>Laki-Laki</option>
                <option value='P' selected="selected">Perempuan</option>
			</select>
    	</div>
		<?php echo form_error('Jenis Kelamin');?>
    </div>

	<div class="form-group">
	  <label class="col-lg-2 control-label">Alamat</label>
		<div class="col-lg-6">	
			<input type="text" class="form-control" name="alamat" maxlength="50" required id="alamat">
    	</div>
		<?php echo form_error('Alamat');?>
	</div>

	<div class="form-group">
	  <label class="col-lg-2 control-label">Nomor WA/HP</label>
		<div class="col-lg-2">	
			<input type="text" class="form-control" name="telpon" maxlength="12" required id="telpon">
    	</div>
		<?php echo form_error('Telpon');?>
	</div>

	<div class="form-group">
	  <label class="col-lg-2 control-label">Login Password</label>
		<div class="col-lg-2">	
			<input type="text" class="form-control" name="password" maxlength="10" required id="password">
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