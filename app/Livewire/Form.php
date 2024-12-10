<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $program_studi;
    public $kelas;
    public $nama_lengkap;
    public $nik;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $email;
    public $alamat;
    public $sumber_informasi;

    public function render()
    {
        return view('livewire.form');
    }
}
