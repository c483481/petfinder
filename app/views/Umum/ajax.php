<div class="panigation">
    <?php if ($data['halamanAktif'] > 1) : ?>
        <p class="next" onclick="next(<?= $data['halamanAktif'] - 1 ?>)">
            < </a>
            <?php endif; ?>
            <!-- navigation -->
            <?php for ($j = 1; $j <= $data['jumlahHal']; $j++) : ?>
                <?php if ($j == $data['halamanAktif']) : ?>
                    <p class="next" onclick="next(<?= $j ?>)" style=" font-weight: bold; color: red;"> <?= $j ?></p>
                <?php else : ?>
                    <p class="next" onclick="next(<?= $j ?>)"> <?= $j ?></p>
                <?php endif; ?>

            <?php endfor; ?>
            <?php if ($data['halamanAktif'] < $data['jumlahHal']) : ?>
                <p class="next" onclick="next(<?= $data['halamanAktif'] + 1 ?>)">></p>
            <?php endif; ?>
</div>


<!-- Isi Konten -->
<div class="Isi <?= $data['filter'] ?>" id="Isi">
    <?php
    foreach ($data['result'] as $row) { ?>
        <div class="card">
            <img src="<?= BASEURL ?>gambar/<?= $row["tipe"] ?>/<?= $row["link"] ?>.<?= $row["tipeFile"] ?>" alt="">
            <div class="Nama">
                <p><?= $row["nama"] ?></p>
            </div>
            <div class="btn" onclick="location.href='#<?= $row['link'] ?>'" ;>
                <a href="#<?= $row["link"] ?>">Lihat</a>
            </div>
        </div>
    <?php
    } ?>
</div>