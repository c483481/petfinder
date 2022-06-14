<?php
class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
                <div class="' . $_SESSION['flash']['tipe'] . '">
                    <strong> ' . $_SESSION['flash']['pesan'] . ' </strong> ' . $_SESSION['flash']['aksi'] . '
                </div>
                ';
            unset($_SESSION['flash']);
        }
    }

    public static function setAlert($pesan)
    {
        $_SESSION['flass'] = [
            'pesan' => $pesan
        ];
    }

    public static function alert()
    {
        if (isset($_SESSION['flass'])) {
            echo "<script>
            alert('" . $_SESSION['flass']['pesan'] . "');
            </script>  ";
            unset($_SESSION['flass']);
        }
    }
}
