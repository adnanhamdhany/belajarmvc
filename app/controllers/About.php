<?php

class About{
    public function index()
    {
        echo "Anda Masuk Class About, method index";
    }

    public function page($nama ='Adnan', $pekerjaan ='Mahasiswa'){
        echo"Nama saya $nama, pekerjaan saya $pekerjaan";
    }
}