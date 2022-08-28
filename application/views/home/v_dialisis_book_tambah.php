<div class="container" style="padding: 100px 0 100px 0;">
  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
      <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
          <h3 id="alert1" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">Tambah Dialisis Book</h3>
          <div style="padding: 30px; border-radius: 10px; box-shadow: 0 0 20px -5px rgba(0, 0, 0, 0.1);">
            <form class="form-horizontal" action="<?php echo site_url('home/dialisis_book_tambahpost'); ?>" method="POST" enctype="multipart/form-data">
              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>Pasien</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" value="<?php echo $this->session->userdata('idpasien'); ?>" readonly>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $this->session->userdata('idpasien'); ?>" readonly>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>Tanggal</label>
                </div>
                <div class="col-lg-8">
                  <input type="date" class="form-control" name="tanggal" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>HD Ke</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="hd" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>HF</label>
                </div>
                <div class="col-lg-8">
                  <!-- <input type="text" class="form-control" name="hf" required> -->
                  <select name="hf" id="hf" class="form-control">
                    <option value="baru">Baru</option>
                    <option value="reuse">ReUse</option>
                  </select>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>Berat Badan Pre HD</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="pre_beratbadan" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>Berat Badan Post HD</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="post_beratbadan" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>Tekanan Darah Pre HD</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="pre_tdarah" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>Tekanan Darah Post HD</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="post_tdarah" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>BUN Pre HD</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="pre_bun" required>
                </div>
              </div>

              <div class="row" style="margin: 20px 0;">
                <div class="col-lg-4">
                  <label>BUN Post HD</label>
                </div>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="post_bun" required>
                </div>
              </div>

              <div class="mx-3" style="display: flex; justify-content: center; align-items: center; column-gap: 10px;">
                <button type="submit" class="btn btn-success" style="border-radius: 10px !important;"><i class="glyphicon glyphicon-saved"></i> Simpan</button>
                <a href="<?php echo site_url('home/dialisis_book'); ?>" class="btn btn-default" style="border-radius: 10px !important;">Kembali</a>
              </div>
            </form>
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>