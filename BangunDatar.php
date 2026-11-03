<?php

class BangunDatar {

    public $phi;

    // Constructor
    public function __construct($phi = 3.14) {
        $this->phi = $phi;
    }

    // Persegi
    public function persegi($sisi) {
        echo "<h3>Persegi</h3>";
        echo "Sisi: $sisi <br>";
        echo "Luas: " . ($sisi * $sisi) . "<br>";
        echo "Keliling: " . (4 * $sisi) . "<br><br>";
    }

    // Persegi Panjang
    public function persegiPanjang($panjang, $lebar) {
        echo "<h3>Persegi Panjang</h3>";
        echo "Panjang: $panjang <br>";
        echo "Lebar: $lebar <br>";
        echo "Luas: " . ($panjang * $lebar) . "<br>";
        echo "Keliling: " . (2 * ($panjang + $lebar)) . "<br><br>";
    }

    // Segitiga
    public function segitiga($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        echo "<h3>Segitiga</h3>";
        echo "Alas: $alas <br>";
        echo "Tinggi: $tinggi <br>";
        echo "Luas: " . (0.5 * $alas * $tinggi) . "<br>";
        echo "Keliling: " . ($sisi1 + $sisi2 + $sisi3) . "<br><br>";
    }

    // Lingkaran
    public function lingkaran($jari) {
        echo "<h3>Lingkaran</h3>";
        echo "Jari-jari: $jari <br>";
        echo "Phi: " . $this->phi . "<br>";
        echo "Luas: " . ($this->phi * $jari * $jari) . "<br>";
        echo "Keliling: " . (2 * $this->phi * $jari) . "<br><br>";
    }

    // Trapesium
    public function trapesium($a, $b, $tinggi, $sisi1, $sisi2) {
        echo "<h3>Trapesium</h3>";
        echo "Sisi sejajar A: $a <br>";
        echo "Sisi sejajar B: $b <br>";
        echo "Tinggi: $tinggi <br>";
        echo "Luas: " . (0.5 * ($a + $b) * $tinggi) . "<br>";
        echo "Keliling: " . ($a + $b + $sisi1 + $sisi2) . "<br><br>";
    }

}

// Membuat objek
$bangun = new BangunDatar(3.14);

// Memanggil setiap method
$bangun->persegi(5);

$bangun->persegiPanjang(10, 5);

$bangun->segitiga(6, 4, 5, 5, 6);

$bangun->lingkaran(7);

$bangun->trapesium(10, 6, 4, 5, 5);

?>