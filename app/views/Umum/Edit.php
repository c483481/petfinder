<div>
    <?= Flasher::flash() ?>
</div>
<?php
$temp = $data['temp'];
?>
<div class="bungkus">
    <div class="form">
        <table>
            <form action="" method="POST" enctype="multipart/form-data">
                <tr>
                    <td colspan="2">
                        <center>
                            <h1>Laporkan</h1>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <h4>Hewan Anda Yang Hilang</h4>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?= $temp['id'] ?>">
                        <label for="nama" class="kanan">Nama Hewan :</label>
                    </td>
                    <td>
                        <input type="text" id="nama" name="nama" value="<?= $temp['nama'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Hilang" class="kanan">Tanggal, Terakhir Di Lihat :</label>
                    </td>
                    <td>
                        <input type="text" id="hilang" name="hilang" value="<?= $temp['hilang'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat" class="kanan">Alamat :</label>
                    </td>
                    <td>
                        <input type="text" id="alamat" name="alamat" value="<?= $temp['alamat'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="deskripsi" class="kanan">Deskripsi / Ciri-Ciri :</label>
                    </td>
                    <td>
                        <input type="text" id="deskripsi" name="deskripsi" value="<?= $temp['deskripsi'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="NoHP" class="kanan">No Telpon :</label>
                    </td>
                    <td>
                        <input type="number" id="NoHP" name="NoHP" minlength="10" value="<?= $temp['noHP'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="kanan">
                        Status :
                    </td>
                    <td>
                        <label for="belum" class="status">Belum Di Temukan </label>
                        <input type="radio" id="belum" name="status" value="Belum Di Laporkan" checked required>
                        <label for="sudah" class="status"> Sudah Di Temukan</label>
                        <input type="radio" id="sudah" name="status" value="Sudah Di Laporkan">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="hidden" name="email" value="<?= $data['email'] ?>">
                            <input type="submit" name="submit">
                        </center>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>

</div>