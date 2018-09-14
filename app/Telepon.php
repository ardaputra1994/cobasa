<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    //
    protected $table = 'telepon';
    protected $primarykey = 'id_siswa';

    protected $fillable = [
    	'id_siswa',
    	'nomor_telepon',	
    ];

    public function siswa()
    {
    	return $this->belongsTo('App\Siswa', 'id_siswa');
    }
}
