<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sura extends Model
{
    protected $table = 'sura';

    protected $fillable = [
        'sura', 'asma', 'total_aya'
    ];

    public function tarjim() {
        return $this->hasMany('App\SuraTarjim');
    }

}
