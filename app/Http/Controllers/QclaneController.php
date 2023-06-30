<?php

namespace App\Http\Controllers;

use App\Models\QcIn;
use App\Models\QcLane;
use Illuminate\Http\Request;

class QclaneController extends Controller
{
    public function index()
    {
        $qc_ins = QcIn::all();
        return view('dashboard.qc-lane.index', compact('qc_ins'));
    }

    public function vin()
    {
        $data = QcIn::where('kode_vin', 'LIKE', '&'.request('q'),'%')->paginate(10);

        return response()->json($data);
    }
}
