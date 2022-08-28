<div class="container" style="padding: 60px 0 80px 0;">
   <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
         <div class="row" style="margin-top: 20px;">
            <div class="col-md-12">
               <div style="display: flex; align-items: center; justify-content: space-between;">
                  <h4 id="alert1" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">Dialisis Book ( <?php echo $this->session->userdata('idpasien') . ' - ' . $nama_pasien; ?> )
                  </h4>
               </div>
               <div class="table-responsive">
                  <style>
                     .table-responsive {
                        padding: 20px;
                        border-radius: 20px;
                        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                     }

                     #tabel-dialisis thead th {
                        padding: 20px 6px;
                        border-bottom: 1px solid #777;
                        font-size: 14px;
                     }

                     #tabel-dialisis tbody th,
                     #tabel-dialisis tbody td {
                        font-size: 12px;
                     }

                     .tabel-dialisis tbody:nth-child(odd) tr {
                        background-color: #F3F4F5 !important;
                     }

                     .tabel-dialisis tr,
                     .tabel-dialisis td {
                        padding: 8px 6px;
                     }
                  </style>

                  <table id="tabel-dialisis" class="display tabel-dialisis" width="100%">
                     <thead>
                        <tr>
                           <th class="text-center">No</th>
                           <th>Data Pasien</th>
                           <th>Periksaan</th>
                           <th>Pre HD</th>
                           <th>Post HD</th>
                        </tr>
                     </thead>
                     <?php $no = 0;
                     foreach ($dialisis_book as $db) : $no++; ?>
                        <tbody>
                           <tr>
                              <th rowspan="5" class="text-center"><?= $no ?></th>
                              <td><strong><span style="letter-spacing: 1px;">(<?= $db->db_idpasien ?>)</span> <?= ucwords($db->p_nama) ?></strong></td>
                              <th>Berat Badan</th>
                              <td><?php echo $db->db_pre_beratbadan; ?></td>
                              <td><?php echo $db->db_post_beratbadan; ?></td>
                           </tr>
                           <tr>
                              <td><strong>Tanggal</strong> : <?php echo $this->template->IndonesiaTgl($db->db_tanggal); ?></td>
                              <th rowspan="2">Tekanan Darah</td>
                              <td rowspan="2"><?php echo $db->db_pre_tdarah; ?></td>
                              <td rowspan="2"><?php echo $db->db_post_tdarah; ?></td>
                           </tr>
                           <tr>
                              <td rowspan="3"><strong>HF</strong> : <?php echo strtoupper(strtolower($db->db_hf)); ?></td>
                           </tr>
                           <tr>
                              <th>BUN</th>
                              <td><?php echo $db->db_pre_bun; ?></td>
                              <td><?php echo $db->db_post_bun; ?></td>
                           </tr>
                           <tr>
                              <td style="padding: 18px 0;"></td>
                              <td style="padding: 18px 0;"></td>
                              <td style="padding: 18px 0;"></td>
                           </tr>
                        </tbody>
                     <?php endforeach; ?>
                  </table>
               </div>
               <!-- <?php foreach ($db as $bt) : ?>
                  <h3 class="blog3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s"></h3>
                  <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">Tanggal:
                     <?= $bt->db_tanggal ?>
                  </p>
                  <p class="blog2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">

                  </p>
                  <div class="row wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                     <a href="" class="btn btn-warning btn-xs"><i class="fa fa-news"></i> Baca </a>
                  </div>
               <?php endforeach ?> -->

            </div>
            <br><br>
         </div>
      </div>
   </div>
</div>