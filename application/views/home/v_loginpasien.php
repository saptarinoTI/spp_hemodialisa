<div class="container" style="padding: 140px 0 100px;">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <h3 id="alert1" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">LOGIN PASIEN</h3>

                    <div class="">
                        <a class="hiddenanchor" id="toregister"></a>
                        <a class="hiddenanchor" id="tologin"></a>

                        <div id="wrapper">
                            <div id="login" class="animate form">
                                <section class="login_content">
                                    <?php echo form_open("home/login_pasien"); ?>
                                    <label style="margin:0 220px 0;">
                                        <?php echo validation_errors(); ?>
                                        <?php echo $message; ?>
                                    </label>
                                    <div class="form-group">
                                        <input style="border-radius: 8px; padding: 20px 14px; font-size: 14px;" type="text" name="username" maxlength="15" required class="form-control" placeholder="Username" />
                                    </div>
                                    <div class="form-group">
                                        <input style="border-radius: 8px; padding: 20px 14px; font-size: 14px;" type="password" required name="password" maxlength="10" class="form-control" placeholder="Password" />
                                    </div>

                                    <div class="footer">
                                        <button type="submit" class="btn btn-block" style="border-radius: 8px; background-color: #3A526A; color: white; padding: 10px 0; font-size: 14px;">LOGIN</button>
                                    </div>
                                    <p style="font-weight: 500; text-align: center; margin-top: 10px;">Sistem Pelayanan Pasien Hemodialisa</p>
                                    <?php echo form_close(); ?>
                                    <!-- form -->
                                </section>
                                <!-- content -->
                            </div>

                        </div>
                    </div>

                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>