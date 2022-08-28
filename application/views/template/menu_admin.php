<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="col-md-4" style="padding-left: 0px;  padding-right: 0px;">
            <img src="<?php echo base_url('assets/images/' . $this->session->userdata('apfoto')) ?>" class="img-responsive" />
        </div>
        <div class="pull-left info">
            <p><?php echo ucwords($this->session->userdata('apusername')); ?></p>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="active">
            <a href="<?php echo site_url('dashboard'); ?>">
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
                <li><a href="<?php echo site_url('user'); ?>"><i class="fa fa-angle-double-right"></i>Data User / Pemakai</a></li>
                <li><a href="<?php echo site_url('pasien'); ?>"><i class="fa fa-angle-double-right"></i> Data Pasien</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Pelayanan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo site_url('jadwal'); ?>"><i class="fa fa-angle-double-right">
                        </i>Jadwal HD Pasien</a></li>
                <li><a href="<?php echo site_url('hemodialis'); ?>"><i class="fa fa-angle-double-right">
                        </i>Form Traveling Dialisis</a></li>
                <li><a href="<?php echo site_url('dialisis_book'); ?>"><i class="fa fa-angle-double-right">
                        </i>Dialisis Book</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url('auth/logout'); ?>" style="color: red; font-weight: 600;">
                <i class="fa fa-power-off"></i> <span>Logout</span>
            </a>
        </li>
    </ul>
</section>