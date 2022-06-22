<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ayat;
use App\Models\Juz;
use App\Models\Surah;
use Illuminate\Http\Request;

class AlquranController extends Controller
{
    public function showSurah()
    {
        return response()->json(Surah::all());
    }

    public function showJuz()
    {
        return response()->json(Juz::all());
    }
    
    public function showAyatBySurah($id)
    {
        $ayat = Ayat::select(['id', 'id_surah', 'no_ayat', 'no_arab', 'ayat', 'latin', 'arti'])
                        ->where('id_surah', $id)->get();
        return response()->json($ayat);
    }
    
    public function showAyatByJuz($id)
    {
        $ayat = Ayat::select(['id', 'id_surah', 'no_ayat', 'no_arab', 'ayat', 'latin', 'arti'])
                        ->where('id_juz', $id)->get();
        return response()->json($ayat);
    }
    
}
