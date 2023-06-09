<?php

namespace App\Http\Controllers;

use App\Models\QcLane;
use App\Models\RtRw;
use Illuminate\Http\Request;

class RtRwController extends Controller
{
    public function index()
    {
        $qc_lanes = QcLane::all();
        return view('dashboard.rtrw.index', compact('qc_lanes'));
    }
    
    public function getData($id)
    {
        $model = QcLane::where('kode_vin', $id)->get();
        return response()->json($model);
    }

    public function tambah(Request $request)
    {
        $data = RtRw::create([
            'kode_vin' => $request->kodeVin,
            'model' => $request->model,
            'tgl_install' => $request->tgl_install,
            'waktu_in' => $request->waktu_in,
            'wsd_rtrw' => $request->wsd_rtrw,
            'fr_rtrw' => $request->fr_rtrw,
            'fl_rtrw' => $request->fl_rtrw,
            'rr_rtrw' => $request->rr_rtrw,
            'rl_rtrw' => $request->rl_rtrw,
            'qtrr_rtrw' => $request->qtrr_rtrw,
            'qtrl_rtrw' => $request->qtrl_rtrw,
            'bdr_rtrw' => $request->bdr_rtrw,
            'pic' => $request->pic,
            'team' => $request->team,
            'waktu_out' => $request->waktu_out
        ]);
        $data->save();
        return redirect('/dashboard/rtrw')->with('success', 'Data telah berhasil ditambahkan!');
    }
}
