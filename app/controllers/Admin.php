<?php
class Admin extends Controller
{
    public function __construct()
    {
        if (!$_SESSION["login"]) {
            header("location: " . BASEURL);
            exit;
        }
        if ($_SESSION['stat'] != '2') {
            header("location: " . BASEURL);
            exit;
        }
    }

    public function index()
    {
        $data['judul'] = 'Admin';
        $data['css'] = 'halamanUtama';
        $js['script'] = 'script';


        $data['home'] = 'active';
        $data['Lapor'] = '';


        $Main['filter'] = '';
        $data['username'] = $_SESSION["username"];
        $data['stat'] = $_SESSION['stat'];

        $Main['stat'] = $_SESSION['stat'];
        $dataPerHal = 8;
        $sumData = $this->model('Main_model')->jumlahData();
        $Main['jumlahHal'] = ceil($sumData / $dataPerHal);
        $Main['halamanAktif'] = 1;
        $Main['email'] = $_SESSION['email'];
        $awalan = ($dataPerHal * $Main['halamanAktif']) - $dataPerHal;
        $Main['result'] = $this->model('Main_model')->dataTampil($awalan, $dataPerHal);
        $Main['form'] = $this->model('Main_model')->dataForm();
        $this->view('Template/mainAtas', $data);
        $this->view('Umum/halamanUtama');
        $this->view('Umum/ajax', $Main);
        $this->view('Umum/form', $Main);
        $this->view('Template/mainBawah', $js);
    }
    public function getUbah()
    {
        $data = $_POST["kategori"];


        $nama = $_POST["key"];


        $Main['filter'] = $_POST["size"];
        $anjing = ($data[0] == '') ? "----" : $data[0];
        $kucing = ($data[1] == '') ? "----" : $data[1];
        $burung = ($data[2] == '') ? "----" : $data[2];

        $dataPerHal = 8;
        $sumData = $this->model('Main_model')->jumlahDataKhusus($nama, $anjing, $kucing, $burung);
        $Main['jumlahHal'] = ceil($sumData / $dataPerHal);
        $Main['halamanAktif'] =  (isset($halaman)) ? $halaman : 1;
        $awalan = ($dataPerHal * $Main['halamanAktif']) - $dataPerHal;
        $Main['result'] = $this->model('Main_model')->dataTampilAjax($nama, $anjing, $kucing, $burung, $awalan, $dataPerHal);



        $this->view('Umum/ajax', $Main);
    }

    public function next()
    {
        $data = $_POST["kategori"];


        $nama = $_POST["key"];


        $Main['filter'] = $_POST["size"];
        $anjing = ($data[0] == '') ? "----" : $data[0];
        $kucing = ($data[1] == '') ? "----" : $data[1];
        $burung = ($data[2] == '') ? "----" : $data[2];

        $dataPerHal = 8;
        $sumData = $this->model('Main_model')->jumlahDataKhusus($nama, $anjing, $kucing, $burung);
        $Main['jumlahHal'] = ceil($sumData / $dataPerHal);
        $Main['halamanAktif'] =  $_POST['hal'];
        $awalan = ($dataPerHal * $Main['halamanAktif']) - $dataPerHal;
        $Main['result'] = $this->model('Main_model')->dataTampilAjax($nama, $anjing, $kucing, $burung, $awalan, $dataPerHal);



        $this->view('Umum/ajax', $Main);
    }


    public function TimPengembang()
    {
        $this->view('Perkenalan/TimPengembang');
    }

    public function lapor()
    {
        $data['judul'] = 'Lapor';
        $data['css'] = 'lapor';
        $data['js'] = '';
        $data['home'] = '';
        $data['stat'] = $_SESSION['stat'];
        $data['Lapor'] = 'active';
        $data['username'] = $_SESSION["username"];
        $data['email'] = $_SESSION['email'];

        if (isset($_POST["submit"])) {
            if ($this->model('Main_model')->tambah($_POST) > 0) {
                Flasher::setFlash("Berhasil", "melapor", "berhasil");
            } else {
                Flasher::setFlash("Gagal", "melapor", "gagal");
            }
        }

        $this->view('Template/mainAtas', $data);
        $this->view('Umum/lapor', $data);
        $this->view('Template/mainBawah', $data);
    }

    function edit($id)
    {

        $data['judul'] = 'Edit';
        $data['css'] = 'lapor';
        $data['js'] = '';
        $data['home'] = '';
        $data['Lapor'] = 'active';
        $data['username'] = $_SESSION["username"];
        $data['stat'] = $_SESSION['stat'];
        if (isset($_POST["submit"])) {
            if ($this->model('Main_model')->edit($_POST) > 0) {
                Flasher::setFlash("Berhasil", "di Edit", "berhasil");
            } else {
                Flasher::setFlash("Gagal", "di Edit", "gagal");
            }
        }

        $Edit['temp'] = $this->model('Main_model')->cariHewanId($id);
        if ($_SESSION['email'] == $Edit['temp']['email']) {
            $this->view('Template/mainAtas', $data);
            $this->view('Umum/Edit', $Edit);
            $this->view('Template/mainBawah', $data);
        } else {
            header("Location: " . BASEURL . "Auth");
        }
    }

    function melapor()
    {
        $this->model('Main_model')->lapor($_POST['id']);
    }

    function logout()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();
        session_start();
        header("Location: " . BASEURL);
        exit;
    }

    function hapus($id)
    {
        if ($_SESSION['stat'] == '2') {
            $this->model('Main_model')->hapus($id);
            header("Location: " . BASEURL . "Admin");
            exit;
        } else {
            $this->logout();
        }
    }
}
