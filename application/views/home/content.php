<!-- ============== About and Service section ============== -->
<div class="second-section">
    <div class="container about-section">
        <div class="row">
            <div class="col-sm-4 for-color">
                <div class="about">

                    <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">SPP Hemodialisa </h2>

                    <p style="width: 90%;">SPP Hemodialisa adalah Sistem Pelayanan Pasien Hemodialisa yang rutin dilaksanakan oleh RSUD Taman Husada Bontang.</p>
                    <?php if (!$this->session->userdata('idpasien')) : ?>
                        <a href="<?php echo site_url('auth/login') ?>" class="about-bt hvr-bounce-to-right">Login Admin<span class="text-right" </span></a>
                    <?php else : ?>
                        <p></p>
                    <?php endif; ?>
                </div>
                <!-- /.about -->
            </div>
            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
            <div class="col-sm-8 service">
                <h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" id="servicehome">Fitur SPP Hemodialisa</h2>
                <div class="row">

                    <div class="col-xs-4 col-sm-2 col-md-2" style="font-size:40px;">
                        <i class="fa fa-file"></i>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-8">
                        <div>
                            <p class="newse2">Data Pasien</p>
                            <p class="news6">Pengelolaan data pasien hemodialisa</p>
                        </div>
                        <!-- /.business -->
                    </div>
                    <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                    <div class="col-xs-4 col-sm-2 col-md-2" style="font-size:40px;">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-8">
                        <div>
                            <p class="newse2">Jadwal Hemodialisa</p>
                            <p class="news6">Mengelola jadwal Hemodialisa pasien setiap harinya</p>
                        </div>
                        <!-- /.business -->
                    </div>

                    <div class="col-xs-4 col-sm-2 col-md-2" style="font-size:40px;">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-8">
                        <div>
                            <p class="newse2">Traveling Dialisis</p>
                            <p class="news6">Merupakan sebuah surat pengantar hemodialisis dalam bentuk form</p>
                        </div>
                        <!-- /.business -->
                    </div>

                    <div class="col-xs-4 col-sm-2 col-md-2" style="font-size:40px;">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-8">
                        <div>
                            <p class="newse2">Dialisis Book</p>
                            <p class="news6">Mengelola catatan dialisis pasien hemodialisa</p>
                        </div>
                        <!-- /.business -->
                    </div>
                    <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.service -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<br>
<!-- /.second-section -->