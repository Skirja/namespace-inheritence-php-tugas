<?php

require_once 'KaryawanTetap.php';
require_once 'Freelance.php';

// Membuat objek KaryawanTetap
$karyawanTetap = new KaryawanTetap("Ali", 5000000, 1000000);
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();
echo "\n";

// Membuat objek Freelance
$freelance = new Freelance("Budi", 0, 50, 100000);
$freelance->infoPegawai();
$freelance->infoGaji(); 