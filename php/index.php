<?php

class AnggotaDPR {
    private $id;
    private $nama;
    private $namaBidang;
    private $namaPartai;
    private $fotoProfil;

    public function __construct($id, $nama, $namaBidang, $namaPartai, $fotoProfil) {
        $this->id = $id;
        $this->nama = $nama;
        $this->namaBidang = $namaBidang;
        $this->namaPartai = $namaPartai;
        $this->fotoProfil = $fotoProfil;
    }

    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNamaBidang() {
        return $this->namaBidang;
    }

    public function getNamaPartai() {
        return $this->namaPartai;
    }

    public function getFotoProfil() {
        return $this->fotoProfil;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNamaBidang($namaBidang) {
        $this->namaBidang = $namaBidang;
    }

    public function setNamaPartai($namaPartai) {
        $this->namaPartai = $namaPartai;
    }

    public function setFotoProfil($fotoProfil) {
        $this->fotoProfil = $fotoProfil;
    }
}

class DPRManager {
    private $anggotaDPRs = [];

    public function __construct()
    {

        $this->tambahAnggota(1, 'H. IRMAWAN, S.Sos, M.M.', 'Komisi I', 'PKB', 'irmawan.jpg');
        $this->tambahAnggota(2, 'ZURISTYO FIRMADATA, S.E., M.M.', 'Komisi II', 'Nasdem', 'zuristyo.jpg');
        $this->tambahAnggota(3, 'ZULKIFLI HASAN, SE., M.M.', 'Komisi II', 'PAN', 'zulkifli.jpg');
    }

    public function tambahAnggota($id, $nama, $namaBidang, $namaPartai, $fotoProfil) {
        $anggota = new AnggotaDPR($id, $nama, $namaBidang, $namaPartai, $fotoProfil);
        $this->anggotaDPRs[$id] = $anggota;
    }

    public function ubahAnggota($id, $nama, $namaBidang, $namaPartai, $fotoProfil) {
        if (isset($this->anggotaDPRs[$id])) {
            $this->anggotaDPRs[$id]->setNama($nama);
            $this->anggotaDPRs[$id]->setNamaBidang($namaBidang);
            $this->anggotaDPRs[$id]->setNamaPartai($namaPartai);
            $this->anggotaDPRs[$id]->setFotoProfil($fotoProfil);
            return true;
        }
        return false;
    }

    public function hapusAnggota($id) {
        if (isset($this->anggotaDPRs[$id])) {
            unset($this->anggotaDPRs[$id]);
            return true;
        }
        return false;
    }

    public function getDaftarAnggota() {
        return $this->anggotaDPRs;
    }
}

// Contoh penggunaan menu pilihan:

$dprManager = new DPRManager();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['tambah'])) {
        $dprManager->tambahAnggota($_POST['id'], $_POST['nama'], $_POST['bidang'], $_POST['partai'], $_POST['foto']);
    } elseif (isset($_POST['ubah'])) {
        $dprManager->ubahAnggota($_POST['id'], $_POST['nama'], $_POST['bidang'], $_POST['partai'], $_POST['foto']);
    } elseif (isset($_POST['hapus'])) {
        $dprManager->hapusAnggota($_POST['id']);
    }
}

// Menampilkan daftar anggota dalam bentuk tabel
$daftarAnggota = $dprManager->getDaftarAnggota();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota DPR</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Anggota DPR</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Bidang</th>
            <th>Partai</th>
            <th>Foto Profil</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftarAnggota as $anggota) { ?>
            <tr>
                <td><?php echo $anggota->getId(); ?></td>
                <td><?php echo $anggota->getNama(); ?></td>
                <td><?php echo $anggota->getNamaBidang(); ?></td>
                <td><?php echo $anggota->getNamaPartai(); ?></td>
                <td><img src="<?php echo $anggota->getFotoProfil(); ?>" alt="Foto Profil" width="100"></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $anggota->getId(); ?>">
                        <input type="submit" name="ubah" value="Ubah">
                        <input type="submit" name="hapus" value="Hapus">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <h2>Tambah Anggota</h2>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Bidang:</td>
                <td><input type="text" name="bidang"></td>
            </tr>
            <tr>
                <td>Partai:</td>
                <td><input type="text" name="partai"></td>
            </tr>
            <tr>
                <td>Foto Profil:</td>
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
