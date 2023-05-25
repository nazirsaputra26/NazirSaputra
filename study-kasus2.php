<?php

    class Makanan{
        
        public $nama;
        private $umur;
        protected $warnakesukaan;

        // method untuk setter = menyimpan data
        public function setNama($data){
            $this->nama = $data;
        }

        public function setUmur($data){
            $this->umur = $data;
        }

        public function setWarnaKesukaan($data){
            $this->warnakesukaan = $data;
        }

        // method untuk getter = mengabil data dari method setter
        public function getNama(){
            return $this->nama;
        }

        public function getUmur(){
            return $this->umur;
        }

        public function getWarnaKesukaan(){
            return $this->warnakesukaan;
        }

    }

    $manusia1 = new Makanan;
    $manusia1->setNama("Nazir Saputra");
    $manusia1->setUmur("16");
    $manusia1->setWarnaKesukaan("Pink");

    // menampilkan isi dari setter yang diambil menggunakan getter
    echo "Nama saya " . $manusia1->getNama();
    echo "<br>";
    echo "Umur saya " . $manusia1->getUmur();
    echo "<br>";
    echo "Warna Kesukaan saya " . $manusia1->getWarnaKesukaan();
?>