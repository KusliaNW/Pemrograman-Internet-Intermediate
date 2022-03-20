<?php

class Kendaraan {

    public  $nama, $merk, $warna, $berat, $tahunkeluar, $harga;

    public function __construct( $nama = "nama", $merk = "merk", $warna = "warna", $berat = "berat", $tahunkeluar = "tahunkeluar", $harga = 0) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->berat = $berat;
        $this->tahunkeluar = $tahunkeluar;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->merk, $this->warna";

    }

    public function getTipeKendaraan() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Gunung {

    public  $jenis, $nama, $lokasi, $ketinggian, $jumlahjalur , $provinsi;

    public function __construct( $jenis = "jenis", $nama = "nama", $lokasi = "lokasi", $ketinggian = "ketinggian", $jumlahjalur = "jumlahjalur", $provinsi = "provinsi") {

        $this->jenis = $jenis;
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->ketinggian = $ketinggian;
        $this->jumlahjalur = $jumlahjalur;
        $this->provinsi = $provinsi;


    }

    public function getlabel() {

        return "$this->nama, $this->lokasi, $this->ketinggian, $this->jumlahjalur";

    }

    public function getTipeGunung() {

        $str = "{$this->nama} │ {$this->getlabel()} {$this->provinsi()}";

        return $str;
    }

}

class Motor extends Kendaraan {

    public function getInfoKendaraan() {
        $str = "Motor    = {$this->nama} , {$this->getlabel()} , {$this->berat} , {$this->tahunkeluar} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Mobil extends Kendaraan {

    public function getInfoKendaraan() {
        $str = "Mobil = {$this->nama} , {$this->getlabel()} , {$this->berat} , {$this->tahunkeluar} , Rp. {$this->harga} ";
        return $str; 
    }

}

class GunungApiAktif extends Gunung {

    public function getInfoGunung() {
        $str = "GunungApiAktif = {$this->jenis} , {$this->getlabel()} , {$this->provinsi} ";
        return $str; 
    }

}

class GunungApiMati extends Gunung {

    public function getInfoGunung() {
        $str = "GunungApiMati = {$this->jenis} , {$this->getlabel()} , {$this->provinsi} ";
        return $str; 
    }

}

class CetakInfoKendaraan {

    public function cetak(Kendaraan $kendaraan){
        $str = "{$kendaraan->nama} {$kendaraan->getlabel()}, Rp. {$kendaraan->harga} ";
        return $str;
    }

}

class CetakInfoGunung {

    public function cetak(Gunung $Gunung){
        $str = "{$Gunung->jenis} {$gunung->getlabel()}, {$gunung->provinsi})";
        return $str;
    }

}

$kendaraan1 = new Motor("Scoopy", "Honda", "Merah", "94 KG", "2010", 19750000);
$kendaraan2 = new Motor("NMAX", "Yamaha", "Hitam", "130 KG", "2015", 30850000);
$kendaraan3 = new Mobil("Brio", "Honda", "Kuning", "920 KG", "2011", 153700000);
$kendaraan4 = new Mobil("Pajero", "Mitsubisi", "Hitam", "2,030 KG", "1997", 520800000);

$gunung1 = new GunungApiAktif("Gunung Api Aktif", "Gunung Bromo", "Probolinggo", "2.329 m", "4 Jalur", "Jawa Timur");
$gunung2 = new GunungApiAktif("Gunung Api Aktif", "Gunung Dieng", "Banjarnegara", "2.115 m", "4 Jalur", "Jawa Tengah");
$gunung3 = new GunungApiMati("Gunung Api Mati", "Gunung Papandayan", "Garut", "2.665 m", "4 Jalur", "Jawa Barat");
$gunung4 = new GunungApiMati("Gunung Api Mati", "Gunung Argapura", "Probolinggo", "3.088 m", "2 Jalur", "Jawa Timur");

echo $kendaraan1->getInfoKendaraan();
echo "<br>";
echo $kendaraan2->getInfoKendaraan();
echo "<br>";
echo $kendaraan3->getInfoKendaraan();
echo "<br>";
echo $kendaraan4->getInfoKendaraan();
echo "<hr>";
echo $gunung1->getInfoGunung();
echo "<br>";
echo $gunung2->getInfoGunung();
echo "<br>";
echo $gunung3->getInfoGunung();
echo "<br>";
echo $gunung4->getInfoGunung();
echo "<hr>";


?>