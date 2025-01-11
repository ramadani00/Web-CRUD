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

<div class="container" style="padding-top: 100px;">
<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="m-0">Book A Table</h5>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="row">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama Tamu</label>
                            <input type="text" class="form-control" name="nama_tamu">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Alamat Email</label>
                            <input type="text" class="form-control" name="alamat_email">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">No. Hp</label>
                            <input type="text" class="form-control" name="no_hp">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Tanggal Reservasi</label>
                            <input type="text" class="form-control" name="tgl_res">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Jam Reservasi</label>
                            <input type="text" class="form-control" name="jam_res">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput6" class="form-label">Jumlah Tamu</label>
                            <input type="text" class="form-control" name="jumlah_tamu">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput7" class="form-label">Pesan</label>
                            <input type="text" class="form-control" name="pesan">
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-0" style="width: 6em; height:2.4em">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</secttion>