<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $table = 'quran';

    protected $fillable = [
        'sura', 'aya', 'text'
    ];

    public function tarjim() {
        return $this->hasMany('App\QuranTarjim');
    }

}
