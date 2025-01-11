
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Nusantara Heritage Restaurant</title>
</head>
<body>

<?php

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['submit'])) {

  // ambil data dari formulir
  $nama_tamu = $_POST['nama_tamu'];
  $alamat_email = $_POST['alamat_email'];
  $no_hp = $_POST['no_hp'];
  $tgl_res = $_POST['tgl_res'];
  $jam_res = $_POST['jam_res'];
  $jumlah_tamu = $_POST['jumlah_tamu'];
  $pesan = $_POST['pesan'];

  // buat query
  $query = "INSERT INTO tbl_reservasi (nama_tamu, alamat_email, no_hp, tgl_res, jam_res, jumlah_tamu, pesan) VALUE ('$nama_tamu', '$alamat_email', '$no_hp', '$tgl_res', '$jam_res', '$jumlah_tamu', '$pesan')";
  $sql = mysqli_query($conn, $query);

  // apakah proses simpan berhasil?
  if ($sql) {
    echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=reservasi';</script>";
  } else {
    echo "<script>window.alert('Gagal menambah data!'); window.location='?page=reservasi';</script>";
  }
  }
?>

<section>
  <div class="container section-title" style="width:100%" data-aos="fade-up">
    <h2>Book A Table</h2>
    <span class="description-title">nusantara@heritag e.com<br>
    <span class="description-title">+62 123 123<br></span></span></p>
  </div>
  <div class="container" style="width:100%">
    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4" style="background-image: url('assets/images/restaurant.png');"></div>
      <div class="col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <form action="" method="post">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="nama_tamu" class="form-control" id="nama_tamu" placeholder="Your Name" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="alamat_email" id="alamat_email" placeholder="Your Email" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Your Phone" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="date" name="tgl_res" class="form-control" id="tgl_res" placeholder="Date" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="time" class="form-control" name="jam_res" id="jam_res" placeholder="Time" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="jumlah_tamu" id="jumlah_tamu" placeholder="# of people" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="pesan" rows="5" placeholder="pesan"></textarea>
          </div>
          <div class="text-center mt-3"  padding-bottom: 100px;>
          <div class="loading" style="display: none;">Loading</div>
          <div class="error-message" style="display: none;"></div>
          <div class="sent-message" style="display: none;">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          <div class="float-end mt-2">
            <button type="submit" name="submit" style="background-color: #EF4040; color: white; border: none; padding: 10px 20px;"  class="btn btn-success waves-effect waves-light mx-0" style="width: 6em; height:2.4em">Book A Table</button>
          </div>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>