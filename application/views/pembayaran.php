<!DOCTYPE html>
<html>
  <head>
    <title>inseed.id - Pembayaran</title>
    <?php include_once("template/header.php"); ?>
  </head>
  <body>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
  <section id="pembayaran">
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header">
      <h2>Pembayaran <b>Investasi</b></h2>
    </div>
    <div class="container-fluid">
      <div class="row kontenPembayaran">
        <div class="col-xl-8 col-md-8 col-sm-12 col-xs-12 card cardPembayaran"  >
          <form action="???.php" method="POST" >
            <h3>Masukkan Nominal Investasi Yang Anda Inginkan.</h3>
            <input style="width: 35%;" type="number" name="nominal" min="15000" placeholder="   CONTOH: 15.000">
            <h3>Pilih Nomor Rekening Bank Tujuan</h3>
            <select class="form-control" id="rekening">
              <option value="BRI">BRI 1113-xxxx-xxxx-xxxx</option>
              <option value="BCA">BCA 291829301xxx</option>
            </select>
            <p style="text-align: justify;">Pastikan data anda dan nomor rekening tujuan yang anda pilih sudah benar. Jika sudah melakukan transaksi, maka projek akan langsung masuk dashboard anda.<br>
              Untuk mengecek dashboard anda, silahkan klik <a href="#">Di sini</a> </p>
              <button type="submit" class="btn btn-outline-success" style="padding: 2% 10%; margin: 2% 0">KONFIRMASI</button>
            </form>
          </div>
          <div class="col-xl-4 col-md-4 proyekPembayaran">
            <div class="card cardPembayaran" style=" text-align: center;">
              <div class="col-xl-12 col-md-12 kontenDetail">
                <h5>DETAIL PROYEK</h5>
                <img src="assets/image/petani/petani1.jpg" >
                <h6 style="font-weight: bold;">Proyek Sumenep</h6>
                <h6>Ekpektasi Keuntungan: <b>15%</b></h6>
                <h6>Penanggung Jawab: <b>Pak Tedjo</b></h6>
                <h6>Lokasi Proyek:<b> Sidoarjo, Jawa Timur</b></h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include_once("template/footer.php"); ?> 