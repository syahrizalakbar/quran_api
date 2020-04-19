<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuranTarjim extends Model
{
    protected $table = "quran_tarjim";

    protected $fillable = [
        'quran_id', 'lang', 'tarjim'
    ];

    public function quran($lang) {
        return $this->belongsTo('App\Quran');
    }

}
