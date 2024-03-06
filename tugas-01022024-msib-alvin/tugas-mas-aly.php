<?php

class Film {
    private $judul;
    private $tahun;
    private $genre;

    public function __construct($judul, $tahun, $genre) {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->genre = $genre;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function getGenre() {
        return $this->genre;
    }
}

class FilmDrama extends Film {
    private $pemeranUtama;

    public function __construct($judul, $tahun, $pemeranUtama) {
        parent::__construct($judul, $tahun, 'Drama');
        $this->pemeranUtama = $pemeranUtama;
    }

    public function getPemeranUtama() {
        return $this->pemeranUtama;
    }

    public function tulisReview() {
        return "Review Film Drama: {$this->getJudul()} ({$this->getTahun()}) - Pemeran Utama: {$this->getPemeranUtama()}";
    }
}

class FilmAksi extends Film {
    private $jumlahAdeganAksi;

    public function __construct($judul, $tahun, $jumlahAdeganAksi) {
        parent::__construct($judul, $tahun, 'Aksi');
        $this->jumlahAdeganAksi = $jumlahAdeganAksi;
    }

    public function getInfo() {
        return "Judul: {$this->getJudul()}, Tahun: {$this->getTahun()}, Genre: {$this->getGenre()}, Jumlah Adegan Aksi: {$this->jumlahAdeganAksi}";
    }

    public function tulisReview() {
        return "Review Film Aksi: {$this->getJudul()} ({$this->getTahun()}) - Jumlah Adegan Aksi: {$this->jumlahAdeganAksi}";
    }
}

$filmDrama = new FilmDrama('Judul Film Drama', 2022, 'Ryan Gosling');
$reviewDrama = $filmDrama->tulisReview();

$filmAksi = new FilmAksi('Judul Film Aksi', 2023, 50);
$reviewAksi = $filmAksi->tulisReview();

echo $reviewDrama;
echo "</br> $reviewAksi";
