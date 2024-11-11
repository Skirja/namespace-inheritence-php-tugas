<?php

require_once 'KaryawanTetap.php';
require_once 'Freelance.php';

$karyawanTetap = new KaryawanTetap("Ali", 5000000, 1000000);
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();
echo "\n";

$freelance = new Freelance("Budi", 0, 50, 100000);
$freelance->infoPegawai();
$freelance->infoGaji(); 