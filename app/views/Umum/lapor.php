<div>
    <?= Flasher::flash() ?>
</div>

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
                        <label for="nama" class="kanan">Nama Hewan :</label>
                    </td>
                    <td>
                        <input type="text" id="nama" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Login" class="kanan">Kategori :</label>
                    </td>
                    <td class="hewan">
                        <label for="Anjing"> Anjing </label>
                        <input type="radio" id="Anjing" value="Anjing" name="tipe" required>

                        <label for="Kucing"> Kucing </label>
                        <input type="radio" id="Kucing" value="Kucing" name="tipe">

                        <label for="Burung"> Burung </label>
                        <input type="radio" id="Burung" value="Burung" name="tipe">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Hilang" class="kanan">Tanggal, Terakhir Di Lihat :</label>
                    </td>
                    <td>
                        <input type="text" id="hilang" name="hilang" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat" class="kanan">Alamat :</label>
                    </td>
                    <td>
                        <input type="text" id="alamat" name="alamat" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="deskripsi" class="kanan">Deskripsi / Ciri-Ciri :</label>
                    </td>
                    <td>
                        <input type="text" id="deskripsi" name="deskripsi">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="NoHP" class="kanan">No Telpon :</label>
                    </td>
                    <td>
                        <input type="number" id="NoHP" name="NoHP" minlength="10" required>
                        <input type="hidden" id="status" name="status" value="Belum Di Laporkan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gambar" class="kanan">Gambar :</label>
                    </td>
                    <td>
                        <input type="file" id="gambar" name="gambar" required>
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