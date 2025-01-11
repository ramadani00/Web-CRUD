<?php
require "includes/config.php";

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_reservasi WHERE id_reservasi=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}

// Skrip Proses Update
// cek apakah tombol update sudah diklik atau blum?
if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_tamu = $_POST['nama_tamu'];
    $alamat_email = $_POST['alamat_email'];
    $no_hp = $_POST['no_hp'];
    $tgl_res = $_POST['tgl_res'];
    $jam_res = $_POST['jam_res'];
    $jumlah_tamu = $_POST['jumlah_tamu'];
    $pesan = $_POST['pesan'];

    // update data
    $query2 = "UPDATE tbl_reservasi SET nama_tamu='$nama_tamu', alamat_email='$alamat_email', no_hp='$no_hp', tgl_res='$tgl_res', jam_res='$jam_res', jumlah_tamu='$jumlah_tamu', pesan='$pesan' WHERE id_reservasi='$id2'";
    $sql2 = mysqli_query($conn, $query2);
    // apakah proses update berhasil?
    if ($sql2) {
        echo "<script>window.alert('Data berhasil diupdate!'); window.location='?page=reservasi';</script>";
    } else {
        echo "<script>window.alert('Gagal update data!'); window.location='?page=reservasi';</script>";
    }
}
?>

<div class="container" style="padding-top: 100px;">
<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Update Data Daftar Reservasi</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <!-- menampung nilai id yang akan di edit -->
                        <input type="hidden" name="id" value="<?= $data['id_reservasi'] ?>" />
                        <div class="row">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Tamu</label>
                                <input type="text" class="form-control" name="nama_tamu" value="<?= $data['nama_tamu'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Alamat Email</label>
                                <input type="text" class="form-control" name="alamat_email" value="<?= $data['alamat_email'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput3" class="form-label">No. Hp</label>
                                <input type="text" class="form-control" name="no_hp" value="<?= $data['no_hp'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput4" class="form-label">Tanggal Reservasi</label>
                                <input type="text" class="form-control" name="tgl_res" value="<?= $data['tgl_res'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput5" class="form-label">Jam Reservasi</label>
                                <input type="text" class="form-control" name="jam_res" value="<?= $data['jam_res'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput6" class="form-label">Jumlah Tamu</label>
                                <input type="text" class="form-control" name="jumlah_tamu" value="<?= $data['jumlah_tamu'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput7" class="form-label">Pesan</label>
                                <input type="text" class="form-control" name="pesan" value="<?= $data['pesan'] ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light mx-2" style="width: 6em; height:2.4em">Update</button>
                            <a class="btn btn-primary" href="?page=reservasi" role="button" style="width: 6em; height:2.4em">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
