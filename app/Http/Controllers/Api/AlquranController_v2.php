<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ayat;
use App\Models\Juz;
use App\Models\Surah;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class AlquranController_v2 extends Controller
{
    public function showSurah()
    {
        $result=array();
        $surah = Surah::all();
        if ($surah !== null) {
            $result['status_code'] = 200;
            $result['status_message'] = 'Success, request data approved';
            $result['data'] = $surah;
        } else {
            $result['status_code'] = 403;
            $result['status_message'] = 'Failure, request data rejected';
        }
        return response()->json($result);
    }

    public function showJuz()
    {
        $result=array();
        $juz = Juz::all();
        if ($juz !== null) {
            $result['status_code'] = 200;
            $result['status_message'] = 'Success, request data approved';
            $result['data'] = $juz;
        } else {
            $result['status_code'] = 403;
            $result['status_message'] = 'Failure, request data rejected';
        }
        return response()->json($result);
    }
    
    public function showAyatBySurah($id)
    {
        $result=array();
        $ayat = Ayat::select(['id', 'id_surah', 'no_ayat', 'no_arab', 'ayat', 'latin', 'arti'])
        ->where('id_surah', $id)->get();
        if ($ayat !== null) {
            $result['status_code'] = 200;
            $result['status_message'] = 'Success, request data approved';
            $result['data'] = $ayat;
        } else {
            $result['status_code'] = 403;
            $result['status_message'] = 'Failure, request data rejected';
        }
        return response()->json($result);
    }
    
    public function showAyatByJuz($id)
    {
        $result=array();
        $ayat = Ayat::select(['id', 'id_surah', 'no_ayat', 'no_arab', 'ayat', 'latin', 'arti'])
                        ->where('id_juz', $id)->get();
        if ($ayat !== null) {
            $result['status_code'] = 200;
            $result['status_message'] = 'Success, request data approved';
            $result['data'] = $ayat;
        } else {
            $result['status_code'] = 403;
            $result['status_message'] = 'Failure, request data rejected';
        }
        return response()->json($result);
    }
    
}
