    <div class="uv-rounds">
        <header>
            <div class="top-section top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 w100 top-icons">
                            <div class="social">
                                <a href="https://facebook.com/"><i class="fa icon-social-facebook fa-x3"></i></a>
                                <a href="https://twitter.com/"><i class="fa icon-social-twitter fa-x3"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa icon-social-youtube fa-x3"></i></a>
                            </div>
                        </div>
                        <!-- /.top-icons -->
                        <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs w100 phone right">
                            <a href="<?php echo base_url('home/contact') ?>" class="email hidden-xs"><i class="fa icon-envelope-open ph-size" aria-hidden="true"></i> rsudbontang@yahoo.co.id</a>
                            <a href="#" class="number hidden-xs"><i class="fa icon-screen-smartphone ph-size" aria-hidden="true"></i> +62 548 22111, 29111</a>
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
                    <div class="row">
                       
                        <div class="col-lg-9 col-md-9 nav-outer">
                        <nav class="navbar navbar-default">
                        <div class="container-fluid">

						<div class="col-lg-5 logo">
                        	<img src="<?php echo base_url(); ?>assets/images/logo.png" 
                            	alt="" style="height: 40px;">
							<font color="#FF00FF"><h4>SIPP Hemodialisa</h4></font>
						</div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li id="Home" class="">
                                   <a href="<?php echo base_url() ?>" class="hvr-underline-from-center">Home</a>
                                </li>
                                <li id="Berita" class="">
                                   <a href="<?php echo base_url('home/informasi') ?>" class="hvr-underline-from-center">Informasi</a>
                                </li>
                                <li id="Peta" class="">
                                   <a href="<?php echo base_url('home/login_pasien') ?>" class="remove-border hvr-underline-from-center">Login Pasien </a>
                                </li>
                                <li id="Contact" class="">
                                   <a href="<?php echo base_url('home/contact') ?>" class="remove-border hvr-underline-from-center">Kontak Kami</a>
                                </li>
                                   <a href="<?= base_url('auth/login') ?>" class="mail-ico msg-gap hidden-xs" data-toggle="tooltip" data-placement="top" title="Login Admin"><i class="fa fa-sign-in for_inifial"></i></a>
                             </ul>
                         </div>
                         <!-- /.navbar-collapse -->
                         
                        </div>
                        <!-- /.container-fluid -->
                        </nav>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.bottom-section -->
        </header>
        <!-- header -->

    <script type="text/javascript">
        document.getElementById("<?= $title ?>").className = "active";
    </script>