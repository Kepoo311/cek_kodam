<?php

namespace App\Livewire;

use Livewire\Component;

class Kodam extends Component
{
    public $nama;
    public $result;

    public function cekKodam(){
        $khodam = [
            "",
            "Marsha adidas",
            "Bak air",
            "Naga Emas",
            "Elang Hitam",
            "Kuda Hitam",
            "Harimau Hitam",
            "Kosong",
            "Serigala mokel",
            "Bis recing",
            "Kunti bogel",
            "Ivan teletabis",
            "Singa Merah",
            "Pisang thanos",
            "Alok salto",
            "Onde onde",
            "Serigala Perak",
            "Kera Sakti",
            "Uni bakwan",
            "Lembu Hitam",
            "Marina",
            "Macan Putih",
            "Dorak botak",
            "Adudu kepleset",
            "Minyak telon",
            "Khong guan",
            "Angkot jungkel",
            "Gajah Putih",
            "Ayam bekokok",
            "Ivat teletabis",
            "Buaya Putih",
            "Toen oren",
            "Kijang Emas",
            "Badut mixue",
            "Labuan bajo",
            "Ular Hijau",
            "Garuda Merah",
            "Loly cafe",
            "Asmara spiko",
            "Ban cacing",
            "Lebah tobrut",
            "Burung Hantu Emas",
            "Hackerman",
            "Kuda Hitam"
        ];

        $angkaRandom = rand(1,10);
        $jumStr = strlen($this->nama);

        $angka = $angkaRandom * $jumStr;

        $panjangArray = count($khodam) - 1;


        if ($angka > $panjangArray){
            $i = $angka - $panjangArray;

            sleep(2);
            $this->result = $khodam[$i];
        } else {
            sleep(2);
            $this->result = $khodam[$angka];
        }
    }

    public function reload(){
        $this->js('window.location.reload()'); 
    }



    public function render()
    {
        return view('livewire.kodam');
    }
}
