<?php
/* APLIKASI PERHITUNGAN BATTRERY */
class Battery {
    public $full;
    protected $desain;

    public function __construct($full, $desain) {
        $this->full = $full;
        $this->desain = $desain;

    }
} 

class hitung extends battery {
    public function hitung_battery(){
        $x = round(($this->full/$this->desain))*100;
        return $x."%";
    }

    public function __destruct(){
        echo "keterangan:<br>
        >=60% = Masih Baik <br>
        <60% = Saatnya ganti<br>";

    }
}

$hasil = new hitung (36,36);

echo "battery percentase hasil adalah=".$hasil->hitung_battery()."<hr>"
