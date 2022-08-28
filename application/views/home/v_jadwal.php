<div class="container">
   <div class="row" style="padding: 100px 0;">
      <div class="col-xs-12 col-md-12 col-lg-12">
         <div class="row">
            <div class="col-md-12">
               <h4 id="alert1" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">Jadwal Pasien ( <?php echo $this->session->userdata('idpasien') . ' - ' . $nama_pasien; ?> )
               </h4>
               <div class="table-responsive" style="padding: 10px 20px; box-shadow: 0 0 30px -5px rgba(0, 0, 0, 0.08); border-radius: 10px;">
                  <table id="example2" class="display table table-striped" style="width:100%">
                     <thead>
                        <tr>
                           <th style="padding:18px 10px; font-size: 14px;">No</th>
                           <th style="padding:18px 10px; font-size: 14px;">Hari, Tanggal HD</th>
                           <th style="padding:18px 10px; font-size: 14px;">Shift</th>
                           <th style="padding:18px 10px; font-size: 14px;">Keterangan</th>
                        </tr>
                     </thead>
                     <?php $no = 0;
                     foreach ($jadwal as $jadwal) : $no++; ?>
                        <tr>
                           <th style="padding:18px 10px; font-size: 12px;"><?php echo $no; ?></th>
                           <td style="padding:18px 10px; font-size: 12px;"><?php echo $jadwal->j_hari; ?>, <?php echo $jadwal->j_tgl; ?></td>
                           <td style="padding:18px 10px; font-size: 12px;"><?php echo $jadwal->j_shift; ?></td>
                           <td style="padding:18px 10px; font-size: 12px;"><?php echo $jadwal->j_keterangan ?></td>
                        </tr>
                     <?php endforeach ?>
                  </table>
               </div>
            </div>
            <br><br>
         </div>
      </div>
   </div>
</div>