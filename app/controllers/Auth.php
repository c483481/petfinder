<?php
class Auth extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION["login"])) {
            if ($_SESSION["login"]) {
                $result = $this->model('Auth_model')->cek($_SESSION['email']);
                if ($result['stat'] === '1') {
                    header("Location: " . BASEURL . "Umum");
                    exit;
                } else if ($result['stat'] === '2') {
                    header("Location: " . BASEURL . "Admin");
                    exit;
                }
            }
        }
    }
    public function index()
    {
        $header['judul'] = 'Login';
        $header['css'] = 'Login';
        $js['script'] = 'Login';
        $this->view('Template/atas', $header);
        $this->view('Login/login');
        $this->view('Template/bawah', $js);
    }

    public function register()
    {
        if (isset($_POST["submit"])) {
            if ($this->model('Auth_model')->daftar($_POST) > 0) {
                Flasher::setFlash("Berhasil", "mendaftar", "berhasil");
                header('location: ' . BASEURL . 'Auth');
                exit;
            } else {
                Flasher::setAlert("Email yang anda masukan sudah terdaftar, atau password yang anda masukan tidak sama.");
                header('location: ' . BASEURL . 'Auth/register');
                exit;
            }
        } else {
            $data['judul'] = 'Register';
            $data['css'] = 'Register';
            $js['script'] = 'Register';
            $this->view('Template/atas', $data);
            $this->view('Login/register');
            $this->view('Template/bawah', $js);
        }
    }

    function _login()
    {
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            if ($this->model('Auth_model')->jum($email) === 1) {
                $result = $this->model('Auth_model')->cek($email);
                if (password_verify($_POST["password"], $result["password"])) {
                    $_SESSION["login"] = true;
                    $_SESSION["email"] = $result["email"];
                    $_SESSION["username"] = $result["username"];
                    $_SESSION['stat'] = $result['stat'];
                    if ($result['stat'] === '1') {
                        header("Location: " . BASEURL . "Umum");
                        exit;
                    } else if ($result['stat'] === '2') {
                        header("Location: " . BASEURL . "Admin");
                        exit;
                    } else if ($result['stat'] === '0') {
                        Flasher::setFlash('Akun Belum Di ', 'Verivikasi', 'gagal');
                        $this->index();
                    } else {
                        Flasher::setFlash('Akun Anda Di ', 'Ban Permanen', 'gagal');
                        $this->index();
                    }
                }
            } else {
                Flasher::setFlash('gagal', 'login', 'gagal');
                $this->index();
            }
        }
    }
}
