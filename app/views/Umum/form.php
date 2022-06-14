</div>
<div class="formulir">
    <?php
    foreach ($data['form'] as $row) { ?>
        <div class="fullsize" id="<?= $row["link"] ?>">
            <div class="konten <?= $row["tipe"] ?>">
                <img src="<?= BASEURL ?>gambar/<?= $row["tipe"] ?>/<?= $row["link"] ?>.<?= $row["tipeFile"] ?>">
                <table>
                    <tr>
                        <td>
                            <p class="kanan">Nama :</p>
                        </td>
                        <td>
                            <p class="kiri"><?= $row["nama"] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="kanan">Alamat :</p>
                        </td>
                        <td>
                            <p class="kiri"><?= $row["alamat"] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="kanan">Deskripsi :</p>
                        </td>
                        <td>
                            <p class="kiri"><?= $row["deskripsi"] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="kanan">Terakhir dilihat :</p>
                        </td>
                        <td>
                            <p class="kiri"><?= $row["hilang"] ?></p>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <p class="kanan">NO telp :</p>
                        </td>
                        <td>
                            <p class="kiri"><?= $row["noHP"] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="kanan">Status :</p>
                        </td>
                        <td>
                            <p class="kiri"><?= $row["status"] ?></p>
                        </td>
                    </tr>
                </table>
                <!-- asdfghjkl -->
                <div class="stabil">
                    <div class="btn" onclick="location.href='#';">
                        <p>Kembali</p>
                    </div>

                    <?php if ($data['stat'] == '2') : ?>
                        <div class="btn dangger" onclick="location.href='<?= BASEURL ?>Admin/hapus/<?= $row['id'] ?>';">
                            <p>Hapus</p>
                        </div>
                    <?php endif; ?>

                    <?php if ($row['status'] != 'Sudah Di Laporkan') : ?>
                        <?php if ($row['email'] == $data['email']) : ?>
                            <div class="btn" onclick="location.href='<?= BASEURL ?>Umum/Edit/<?= $row['id'] ?>'">
                                <a class="laporkan" href="<?= BASEURL ?>Umum/Edit/<?= $row['id'] ?>"> Edit</a>
                            </div>
                        <?php else : ?>
                            <div class="btn report" data-id="<?= $row['id'] ?>" data-telp="<?= $row['noHP'] ?>">
                                <p>Laporkan</p>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php
    } ?>
</div>
</div>