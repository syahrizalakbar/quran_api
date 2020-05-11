<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Sura;

class SuraController extends Controller
{
    public $res = array(
        'message' => 'Data tidak ditemukan',
        'data' => null
    );

    public function sura(Request $request) {
        $lang = $request->lang;

        if ($lang == null) {
          $sura = Sura::all();
        } else {
          $sura = Sura::with(['tarjim' => function($tarjim) use ($lang) {
              $tarjim->where('lang', $lang);
          }])->get();
        }

        if (!$sura->isEmpty()) {
            $this->res['message'] = "Success";
            $this->res['data'] = $sura;
        }

        return response()->json($this->res);
    }

}
