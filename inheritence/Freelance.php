<?php

require_once 'Pegawai.php';

class Freelance extends Pegawai {
    private int $jamKerja;
    private float $upahPerJam;

    public function __construct(string $nama, float $gajiPokok, int $jamKerja, float $upahPerJam) {
        parent::__construct($nama, $gajiPokok);
        $this->jamKerja = $jamKerja;
        $this->upahPerJam = $upahPerJam;
    }

    public function hitungGaji(): float {
        return $this->jamKerja * $this->upahPerJam;
    }

    public function infoGaji(): void {
        echo "Jam Kerja: {$this->jamKerja}, Upah per Jam: {$this->upahPerJam}\n";
        echo "Total Gaji: " . $this->hitungGaji() . "\n";
    }
} 