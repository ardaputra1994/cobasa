<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    //
    protected $table = 'telepon';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
    	'id_siswa',
    	'no_telepon',	
    ];

    public function siswa()
    {
    	return $this->hasOne('App\Siswa', 'id');
    }
}
