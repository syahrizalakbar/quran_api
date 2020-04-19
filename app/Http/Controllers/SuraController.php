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
        $sura = Sura::all();

        if (!$sura->isEmpty()) {
            $this->res['message'] = "Success";
            $this->res['data'] = $sura;
        }

        return response()->json($this->res);
    }

    public function suraTarjim(Request $request) {
        $lang = $request->lang;

        $sura = Sura::with(['tarjim' => function($tarjim) use ($lang) {
            $tarjim->where('lang', $lang);
        }])->get();

        if (!$sura->isEmpty()) {
            $this->res['message'] = "Success";
            $this->res['data'] = $sura;
        }

        return response()->json($this->res);
    }
}
