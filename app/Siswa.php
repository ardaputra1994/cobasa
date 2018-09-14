<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';

    protected $fillable = [
    	'nisn', 
    	'nama_siswa', 
    	'tgl_lahir', 
    	'jenis_kelamin'
    ];
    protected $dates = ['tgl_lahir'];

    public function getNamaSiswaAttribute($nama_siswa)
    {
    	return ucwords($nama_siswa);
    }

    public function telepon()
    {
        return $this->hasOne('App\Telepon', 'id_siswa');
    }

    
   
}
