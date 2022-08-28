<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPP Hemodialisa | Login </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url() ?>assets/css/custom_admin.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .login_content {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .form-login {
            padding: 12px 10px;
            font-size: 12px;
            border-radius: 8px !important;
        }

        .form-login-select {
            margin: 0;
            margin-bottom: 20px;
            padding: 16px;
            width: 100%;
            font-size: 14px;
            border-radius: 10px !important;
        }

        .btn-login {
            padding: 12px 0;
            border-radius: 8px;
            color: white;
            font-size: 14px;
            font-weight: 500;
            background-color: #3A526A;
        }

        .btn-login:hover {
            background-color: #2e455c;
            color: white;
        }
    </style>
</head>

<body style="color: #000; background:#F7F7F7;">

    <section class="login_content">
        <?php echo form_open("auth/login"); ?>
        <h1 style="letter-spacing: 2px; font-weight: 600;">LOGIN FORM</h1>
        <label>
            <?php echo validation_errors(); ?>
            <?php echo $message; ?>
        </label>
        <input type="text" name="username" maxlength="15" required class="form-login" placeholder="Username" />
        <input type="password" required name="password" maxlength="10" class="form-login" placeholder="Password" />
        <button type="submit" class="btn bg-olive btn-block btn-login">Login</button>


        <h1 style="font-size: 16px; font-weight: 500; font-family: 'Poppins', sans-serif; margin: 20px 0; color: #777;">Sistem Pelayanan Pasien Hemodialisa</h1>

        <?php echo form_close(); ?>
    </section>

    <!-- <div class="card-login">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <?php echo form_open("auth/login"); ?>
                    <h1>Login Form</h1>
                    <label>
                        <?php echo validation_errors(); ?>
                        <?php echo $message; ?>
                    </label>
                    <div class="form-group">
                        <input type="text" name="username" maxlength="15" required class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input type="password" required name="password" maxlength="10" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <select name="level" class="form-control">
                            <option value='' disabled selected style='display:none;'>Level</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="footer">
                        <button type="submit" class="btn bg-olive btn-block">Login</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <br />
                        <div>
                            <h1>Sistem Pelayanan Pasien Hemodialisa</h1>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </section>
            </div>

        </div>
    </div> -->

</body>

</html>