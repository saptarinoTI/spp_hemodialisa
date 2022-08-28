<div class="uv-rounds">
    <header>
        <div class="top-section top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 w100 top-icons">
                        <div class="social">
                            <a href="https://facebook.com/"><i class="fa icon-social-facebook fa-x3"></i></a>
                            <a href="https://instagram.com/"><i class="fa icon-social-instagram fa-x3"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa icon-social-youtube fa-x3"></i></a>
                        </div>
                    </div>
                    <!-- /.top-icons -->
                    <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs w100 phone right">
                        <i class="fa icon-envelope-open ph-size" aria-hidden="true"></i>
                        <font color="#FFFF00">rsudbontang@yahoo.co.id</a>
                            <i class="fa icon-screen-smartphone ph-size" aria-hidden="true"></i>
                            +62 548 22111 EXT. 1218</a>
                        </font>
                    </div>
                    <div class="col-xs-4 visible-xs  right-in-small">
                        <p class="text-right">
                            <a href="contact_us.html"><i class="fa icon-envelope-open ph-size contact-mail-ph"></i> </a>
                            <a href="contact_us.html"><i class="fa icon-screen-smartphone contact-mail-ph ph-size"></i> </a>
                        </p>
                    </div>
                    <!-- /.phone -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.top-section -->

        <div class="bottom-section">
            <div class="container bottom">
                <nav class="navbar navbar-default navbar-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-8 col-xs-12">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" style="height: 70px;">
                                    <font color="#AEB6BF" size="+3">SPP Hemodialisa -
                                        <?php echo $this->session->userdata('idpasien'); ?></font>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-4 col-xs-12">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="clearfix"></div>
                                    <ul class="nav navbar-nav navbar-right menu-top">
                                        <li><a href="<?php echo base_url() ?>">HOME</a></li>
                                        <li><a href="<?php echo site_url('home/informasi') ?>">DIALISIS BOOK</a></li>
                                        <li><a href="<?php echo site_url('home/jadwal_pasien') ?>">JADWAL PASIEN</a></li>
                                        <li><a href="<?php echo site_url('home/lab_hasil') ?>">TRAVELING DIALISIS</a></li>
                                        <li><a href="<?php echo site_url('home/logout_pasien') ?>"><span style="color: red; font-weight: 600;">LOGOUT</span></a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>

                        </div><!-- /row -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <!-- /.bottom-section -->

    </header>
    <!-- header -->

    <script type="text/javascript">
        document.getElementById("SPP Hemodialisa").className = "active";
    </script>