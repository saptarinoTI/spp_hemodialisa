<!-- Small boxes (Stat box) -->
<div class="row; height: 600">
    <div class="col-lg-3 col-md-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow" style="border-radius: 10px;">
            <div class="inner">
                <h3>
                    <?php echo $tot_pasien; ?>
                </h3>
                <p>
                    Data Pasien
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-document"></i>
            </div>
            <a href="<?php echo site_url('pasien'); ?>" class="small-box-footer">
                Lihat Pasien <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-md-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green" style="border-radius: 10px;">
            <div class="inner">
                <h3>
                    <?php echo $tot_jadwal; ?>
                </h3>
                <p>
                    Jadwal Hemodialisa
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-calendar"></i>
            </div>
            <a href="<?php echo site_url('jadwal'); ?>" class="small-box-footer">
                Lihat Jadwal <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-md-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-purple" style="border-radius: 10px;">
            <div class="inner">
                <h3>
                    <?php echo $tot_hemodialis; ?>
                </h3>
                <p>
                    Traveling Dialisis
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-plane"></i>
            </div>
            <a href="<?php echo site_url('hemodialis'); ?>" class="small-box-footer">
                Lihat Form <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-md-6 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-blue" style="border-radius: 10px;">
            <div class="inner">
                <h3>
                    <?php echo $tot_dialisis; ?>
                </h3>
                <p>
                    Dialisis Book
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-book"></i>
            </div>
            <a href="<?php echo site_url('dialisis_book'); ?>" class="small-box-footer">
                Lihat Form <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->

</div><!-- /.row -->