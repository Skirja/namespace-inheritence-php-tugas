<?php

require_once 'Pegawai.php';

class KaryawanTetap extends Pegawai {
    private float $tunjangan;

    public function __construct(string $nama, float $gajiPokok, float $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    public function infoTunjangan(): void {
        echo "Tunjangan: {$this->tunjangan}\n";
    }
} 