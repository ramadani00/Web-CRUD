<div class="container" style="padding-top: 100px;"></div>
<div class="card card-primary card-outline">

    <div class="card-header">
        <h5 class="float-start mt-2 fw-bold">Daftar Reservasi</h5>
        <div class="float-end mt-2">
            <a title="Tambah data" href="?page=reservasiAdd" class="btn btn-sm btn-success"> Tambah Data</a>
        </div>
    </div>

    <div class="card-body">
            
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="text-center" style="padding-bottom: 25px;">No</th>
                  <th class="text-center" style="padding-bottom: 25px;">Nama Tamu</th>
                  <th class="text-center" style="padding-bottom: 25px;">Alamat Email</th>
                  <th class="text-center" style="padding-bottom: 25px;">No. Hp</th>
                  <th class="text-center" style="padding-bottom: 25px;">Tgl. Reservasi</th>
                  <th class="text-center" style="padding-bottom: 25px;">Jam. Reservasi</th>
                  <th class="text-center" style="padding-bottom: 25px;">Jumlah Tamu</th>
                  <th class="text-center" style="padding-top: 25px;">Pesan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
            $query = "SELECT * FROM tbl_reservasi ORDER BY id_reservasi ASC";
            $sql = mysqli_query($conn, $query);

            $nomor = 1;
            foreach ($sql as $val) {
                ?>
                
                <td class="text-center" style="padding-left: 20px; padding-right: 20px;"><?= $nomor++; ?></td>
                  <td class="text-align justify" style="padding-left: 50px; padding-right: 50px;"><?= $val['nama_tamu']; ?></td>
                  <td class="text-align justify" style="padding-left: 50px; padding-right: 50px;"><?= $val['alamat_email']; ?></td>
                  <td class="text-align justify" style="padding-left: 30px; padding-right: 30px;"><?= $val['no_hp']; ?></td>
                  <td class="text-align justify" style="padding-left: 30px; padding-right: 30px;"><?= $val['tgl_res']; ?></td>
                  <td class="text-align justify" style="padding-left: 30px; padding-right: 30px;"><?= $val['jam_res']; ?></td>
                  <td class="text-align justify" style="padding-left: 30px; padding-right: 30px;"><?= $val['jumlah_tamu']; ?></td>
                  <td class="text-align justify" style="padding-left: 30px; padding-right: 30px;"><?= $val['pesan']; ?></td>
                  <td class="text-center">
                    <a href="?page=reservasiUpdate&id=<?= $val['id_reservasi']; 
                        ?>" class="btn btn-sm btn-warning">Update</a>
                    <a href="?page=reservasiDelete&id=<?= $val['id_reservasi']; 
                        ?>" class="btn btn-sm btn-danger"
                    onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="text-center" style="padding-top: 25px;">No.</th>
                  <th class="text-center" style="padding-top: 25px;">Nama Tamu</th>
                  <th class="text-center" style="padding-top: 25px;">Alamat Email</th>
                  <th class="text-center" style="padding-top: 25px;">No. Hp</th>
                  <th class="text-center" style="padding-top: 25px;">Tgl. Reservasi</th>
                  <th class="text-center" style="padding-top: 25px;">Jam. Reservasi</th>
                  <th class="text-center" style="padding-top: 25px;">Jumlah Tamu</th>
                  <th class="text-center" style="padding-top: 25px;">Pesan</th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
</div>