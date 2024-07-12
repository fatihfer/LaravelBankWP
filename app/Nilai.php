<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = [
        'bank_id',
        'kriteria_id',
        'nilai'
    ];
    public function kriteria(){
        return $this->belongsTo('App\Kriteria','kriteria_id','id');
    }
    public function bank(){
        return $this->belongsTo('App\bank','bank_id','id');
    }
}
