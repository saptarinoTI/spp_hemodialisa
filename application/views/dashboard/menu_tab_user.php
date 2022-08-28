<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>
                    <?php echo $tot_pasien;?>
                </h3>
                <p>
                    Data Pasien
                </p>
            </div>
        	<div class="icon">
            	<i class="ion ion-document"></i>
            </div>
            <a href="<?php echo site_url('pasien');?>" class="small-box-footer">
                Lihat Pasien <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
  </div><!-- ./col -->
   

<div class="col-lg-4 col-xs-6">
    <!-- small box -->
         <div class="small-box bg-blue">
              <div class="inner">
                   <h3>
                       <?php echo $tot_informasi;?>
                   </h3>
                   <p>
                      Dialisis Book
                   </p>
              </div>
              <div class="icon">
                  <i class="ion ion-pie-book"></i>
              </div>
              <a href="<?php echo site_url('informasi');?>" class="small-box-footer">
                  Lihat Catatan <i class="fa fa-arrow-circle-right"></i>
              </a>
         </div>
   </div><!-- ./col -->
   
