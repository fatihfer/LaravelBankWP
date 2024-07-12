<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    protected $table = 'banks';
    protected $fillable = [
        'nama',
        'alamat',
        'jk',
        'tanggal_lahir',
        'telp',
        'foto'
    ];

    public function nilai(){
        return $this->hasMany('App\Nilai','bank_id','id');
    }
}
