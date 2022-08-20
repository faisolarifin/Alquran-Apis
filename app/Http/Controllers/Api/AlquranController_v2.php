<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\{Ayat, Juz, Surah};

class AlquranController_v2 extends Controller
{
    public function showSurah()
    {
        $surah = Surah::all();
        if (!$surah->isEmpty()) {
            return response()->json([
                'code' => 200,
                'message' => 'Success, request data approved.',
                'data' => $surah,
            ]);
        }
        return response()->json([
            'code' => 201,
            'message' => 'Failure, request data rejected.'
        ]);
    }

    public function showJuz()
    {
        $juz = Juz::all();
        if (!$juz->isEmpty()) {
            return response()->json([
                'code' => 200,
                'message' => 'Success, request data approved.',
                'data' => $juz,
            ]);
        }
        return response()->json([
            'code' => 201,
            'message' => 'Failure, request data rejected.'
        ]);
    }
    
    public function showAyatBySurah($id)
    {
        $basmalah = array(
            'arab' => "بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ",
            'latin' => "Bismillāhir-raḥmānir-raḥīm(i).",
            'arti' => "Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang.",
        );
        $ayat = Ayat::select(['id', 'id_surah', 'no_ayat', 'no_arab', 'ayat', 'latin', 'arti'])
        ->where('id_surah', $id)->get();
        if (!$ayat->isEmpty()) {
            return response()->json([
                'code' => 200,
                'message' => 'Success, request data approved.',
                'basmalah' => (!in_array($id, array(1, 9))) ? $basmalah : null,
                'data' => $ayat,
            ]);
        }
        return response()->json([
            'code' => 201,
            'message' => 'Failure, request data rejected.'
        ]);
    }
    
    public function showAyatByJuz($id)
    {
        $ayat = Ayat::select(['id', 'id_surah', 'no_ayat', 'no_arab', 'ayat', 'latin', 'arti'])
                        ->where('id_juz', $id)->get();
        if (!$ayat->isEmpty()) {
            return response()->json([
                'code' => 200,
                'message' => 'Success, request data approved.',
                'data' => $ayat,
            ]);
        }
        return response()->json([
            'code' => 201,
            'message' => 'Failure, request data rejected.'
        ]);
    }
    
}
