<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta property="og:image" content="<?php echo base_url('assets/img/LogoSTTIB.png'); ?>" />
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/LogoSTTIB.png'); ?>" />
  <title>.:: <?php echo $title; ?> ::.</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>



  <style>
    body {
      background-color: grey;
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    @media screen and (max-width: 1500px) {
      .containers {
        width: 100%;
        max-width: 1070px;
        margin: 0 auto;
        position: relative;
      }

      .content {
        width: 100%;
        max-width: 1070px;
        margin: 0 auto;
        position: relative;
      }
    }
  </style>
</head>

<body>

  <div class="containers">

    <div class="row" style="margin: 0px">

      <div class="col-md-9">

        <?php echo $_content; ?>

      </div>

    </div>

</body>

</html>