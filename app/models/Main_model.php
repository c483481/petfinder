<?php


class Main_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    function jumlahData()
    {
        $this->db->query("SELECT * FROM hewan");
        $this->db->execute();
        return $this->db->rowCount();
    }
    function dataTampil($awalan, $dataPerHal)
    {
        $this->db->query("SELECT * FROM hewan LIMIT :awalan , :dataPerHal");
        $this->db->bind('awalan', $awalan);
        $this->db->bind('dataPerHal', $dataPerHal);
        return $this->db->resultSet();
    }
    function dataForm()
    {
        $this->db->query("SELECT * FROM hewan");
        return $this->db->resultSet();
    }

    function jumlahDataKhusus($nama, $anjing, $kucing, $burung)
    {
        if ($anjing == "----" && $kucing == "----" && $burung == "----") {
            $this->db->query("SELECT * FROM hewan WHERE nama LIKE '%$nama%'");
        } else {
            $this->db->query("SELECT * FROM hewan WHERE nama LIKE '%$nama%' 
            AND
            (tipe LIKE '%$anjing%' OR 
            tipe LIKE '%$kucing%' OR 
            tipe LIKE '%$burung%')");
        }

        $this->db->bind('nama', $nama);

        $this->db->execute();
        return $this->db->rowCount();
    }

    function dataTampilAjax($nama, $anjing, $kucing, $burung, $awalan, $dataPerHal)
    {
        if ($anjing == "----" && $kucing == "----" && $burung == "----") {
            $this->db->query("SELECT * FROM hewan WHERE nama LIKE '%$nama%' 
            LIMIT $awalan , $dataPerHal");
        } else {
            $this->db->query("SELECT * FROM hewan WHERE nama LIKE '%$nama%' 
            AND
            (tipe LIKE '%$anjing%' OR 
            tipe LIKE '%$kucing%' OR 
            tipe LIKE '%$burung%')
            LIMIT $awalan , $dataPerHal");
        }
        return $this->db->resultSet();
    }




    function tambah($data)
    {
        $tipe = htmlspecialchars($data["tipe"]);
        $gambar = $this->uplod_file($tipe);
        if (!$gambar) {
            return false;
        }
        $nama = htmlspecialchars($data["nama"]);
        $hilang = htmlspecialchars($data["hilang"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $NoHP = htmlspecialchars($data["NoHP"]);
        $status = htmlspecialchars($data["status"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $email = htmlspecialchars($data['email']);

        $namaFile = $_FILES["gambar"]["name"];
        $temp = explode('.', $namaFile);
        $extensiFile = strtolower(end($temp));

        $this->db->query("INSERT INTO hewan(nama, tipe, link, alamat, hilang, deskripsi, noHP, status, tipeFile, email) 
        VALUES (:nama,:tipe,:gambar, :alamat, 
        :hilang, :deskripsi,
        :NoHP, :status, :extensiFile, :email)");

        $this->db->bind('nama', $nama);
        $this->db->bind('tipe', $tipe);
        $this->db->bind('gambar', $gambar);
        $this->db->bind('alamat', $alamat);
        $this->db->bind('hilang', $hilang);
        $this->db->bind('deskripsi', $deskripsi);
        $this->db->bind('NoHP', $NoHP);
        $this->db->bind('status', $status);
        $this->db->bind('email', $email);
        $this->db->bind('extensiFile', $extensiFile);


        $this->db->execute();
        return $this->db->rowCount();
    }

    private function uplod_file($tipe)
    {
        $nama = $_FILES["gambar"]["name"];
        $size = $_FILES["gambar"]["size"];
        $tempF = $_FILES["gambar"]["tmp_name"];
        $error =  $_FILES["gambar"]["error"];
        if ($error === 4) {
            echo "
                <script>
                    alert('tidak ada gambar');
                </script>
            ";
            return false;
        }
        $tipeFile = ['jpg', 'jpeg', 'png']; //tipe file yang di perbolehkan
        $temp = explode('.', $nama);

        $extensiFile = strtolower(end($temp));
        if (!in_array($extensiFile, $tipeFile)) {
            echo "
                <script>
                    alert('tipe file tidak di dukung');
                </script>
            ";
            return false;
        }
        if ($size > 1000000) { //1MB
            echo "
                <script>
                    alert('file terlalu besar');
                </script>
            ";
            return false;
        }
        $namaFileBaru = $temp[0];
        $namaFileBaru .= uniqid("", true);
        $namaFileUplod = $namaFileBaru;
        $namaFileBaru .= '.';
        $namaFileBaru .= $extensiFile;
        move_uploaded_file($tempF, 'gambar/' . $tipe . '/' . $namaFileBaru); //sesuaikan di folder sesuai file
        return $namaFileUplod;
    }

    public function cariHewanId($id)
    {
        $this->db->query("SELECT * FROM hewan WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function edit($data)
    {
        $nama = $data["nama"];
        $hilang = $data["hilang"];
        $alamat = $data["alamat"];
        $deskripsi = $data["deskripsi"];
        $noHP = $data["NoHP"];
        $status = $data["status"];
        $alamat = $data["alamat"];
        $id = $data["id"];
        $this->db->query("UPDATE hewan 
        SET nama=:nama,
        alamat=:alamat, 
        hilang=:hilang, 
        deskripsi=:deskripsi,
        noHP=:noHP, status=:status WHERE id=:id");

        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->bind('alamat', $alamat);
        $this->db->bind('hilang', $hilang);
        $this->db->bind('deskripsi', $deskripsi);
        $this->db->bind('noHP', $noHP);
        $this->db->bind('status', $status);

        $this->db->execute();
        return $this->db->rowCount();
    }

    function lapor($id)
    {
        $this->db->query("UPDATE hewan 
        SET status='Sudah Di Laporkan' where id=:id
        ");
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    function hapus($id)
    {
        $this->db->query("DELETE FROM hewan WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
    }
}
