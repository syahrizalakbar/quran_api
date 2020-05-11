<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Quran;

class QuranController extends Controller
{
    public $res = array(
        'message' => 'Surah tidak ditemukan',
        'data' => null
    );

    public function quran(Request $request) {
        $sura = $request->sura;
        $lang = $request->lang;

        if ($lang == null) {
          $quran = Quran::where(['sura' => $sura])->get();
        } else {
          $quran = Quran::where(['sura' => $sura])->with(['tarjim' => function($tarjim) use ($lang) {
              $tarjim->where('lang', $lang);
          }])->get();
        }

        if (!$quran->isEmpty()) {
            $this->res['message'] = "Success";
            $this->res['data'] = $quran;
        }

        return response()->json($this->res);
    }
}
