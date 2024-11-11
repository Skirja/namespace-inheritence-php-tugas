<?php

class Pegawai {
    protected string $nama;
    protected float $gajiPokok;

    public function __construct(string $nama, float $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function infoPegawai(): void {
        echo "{$this->nama} memiliki gaji pokok {$this->gajiPokok}\n";
    }
} 