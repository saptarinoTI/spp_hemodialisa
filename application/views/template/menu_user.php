<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
       <div class="col-md-4" style="padding-left: 0px;  padding-right: 0px;">
	       <img src="<?php echo base_url('assets/images/'.$this->session->userdata('apfoto'))?>"
    	   class="img-responsive"/>
      	</div>
     	<div class="pull-left info">
        	<p><?php echo $this->session->userdata('apusername');?></p>
     	</div>
    </div>
    <!-- search form -->
    <form action="" method="post" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="<?php echo site_url('dashboard_user');?>">
                <i class="fa fa-home"></i><span>Beranda</span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>Master</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('pasien');?>"><i class="fa fa-angle-double-right"></i>Data Pasien</a></li>
                </ul>
        </li>
        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Pelayanan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo site_url('dialisis_book');?>"><i class="fa fa-angle-double-right">
               </i>Dialisis Book Pasien</a></li>               
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url('auth/logout');?>">
                <i class="fa fa-power-off"></i> <span>Logout</span>
            </a>
        </li>
    </ul>
</section>