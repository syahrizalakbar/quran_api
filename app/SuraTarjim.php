<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuraTarjim extends Model
{
    protected $table = 'sura_tarjim';

    protected $fillable = [
        'sura_id', 'lang', 'name', 'description'
    ];

    public function tarjim() {
        return $this->hasMany('App\SuraTarjim');
    }

}
