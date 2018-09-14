<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="assets/image/icon/icon.png">
    <title>inseed.id - Seaweed Invest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleCSS.css">
    <link rel="stylesheet" href="css/jcarousel.responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/jcarousel.responsive.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $("#loading").fadeOut("slow");
    });
    </script>
    </style>
  </head>
  <body>
    <div id="loading"></div>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="cairkan">
      <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header" style="background-color: #0093A7; margin-left: 0px; color: white;">
        <h4><i style="color: black; margin-right: 2%;" class="fas fa-home"></i>Cairkan Dana</h4>
      </div>
      <div class="row" style="margin: 0 5%;">
        <div class="col-md-6" style="margin: 25% 0; text-align: center;">
          <h2>Saldo Anda: Rp100.000</h2>
        </div>
        <div class="col-md-6" class="formCairDana" style="background-color: #0093A7; color: white; margin: 5% 0; padding: 3%;  ">
          <div class="form-group">
            <label class="form-control-placeholder" for="penarikan"><h3>Jumlah Penarikan Dana</h3><h6>(minimal penarikan Rp50.000)</h6></label>
            <input type="text" id="penarikan" class="form-control" required><br><br>
            <label class="form-control-placeholder" for="nomorRekening"><h3>Masukkan Nomor Rekening</h3></label>
            <input type="text" id="nomorRekening" class="form-control" required><br><br>
            <label class="form-control-placeholder-1" for="JB"><h3>Pilih Bank Anda</h3></label>
            <select class="form-control" id="jenisBank">
              <option value="Mandiri">Mandiri</option>
              <option value="BRI">BRI</option>
              <option value="BNI">BNI</option>
              <option value="BCA">BCA</option>
            </select> <br>
            <div style="text-align: center;">
              <button class="btn btn-info" type="submit" style="padding: 2% 20%; margin: 5% 0; " >Konfirmasi</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include_once("template/footer.php"); ?> 
</body>
</html>