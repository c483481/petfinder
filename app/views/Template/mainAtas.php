<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/<?= $data['css'] ?>.css?v=<?php echo time(); ?>">
    <title><?= $data['judul'] ?></title>
</head>

<body>
    <div class="container">
        <!-- Navbar Responsif -->
        <div class="navigasi">
            <nav>
                <div class="icon">

                </div>
                <div class="NamaUser">
                    <h4>
                        <span>
                            <?php if ($data['stat'] == '1') : ?>
                                Selamat Datang
                            <?php elseif ($data['stat'] == '2') : ?>
                                Hallo Admin
                            <?php endif; ?>

                        </span> <?= $data['username'] ?> <span class="nama"> </span>
                    </h4>
                </div>
                <ul>
                    <li><a class="<?= $data['home'] ?>" href="<?= BASEURL ?>Umum">Home</a></li>
                    <li><a class="<?= $data['Lapor'] ?>" href="<?= BASEURL ?>Umum/lapor">Lapor</a></li>
                    <li><a href="<?= BASEURL ?>Umum/TimPengembang">Tim pengembang</a></li>
                    <li><a href="<?= BASEURL ?>Umum/LogOut">Log Out</a></li>
                </ul>

                <div class="menu">
                    <input type="checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>