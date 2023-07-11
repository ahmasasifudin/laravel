<?php

namespace App\Http\Controllers;

use App\Models\LoadingZone;
use App\Models\RtRw;
use Illuminate\Http\Request;

class LoadingZoneController extends Controller
{
    public function index()
    {
        $rt_rws = RtRw::all();
        return view('dashboard.loading-zone.index', compact('rt_rws'));
    }
    
    public function getData($id)
    {
        // $model = RtRw::where('kode_vin', $id)->get();
        $model = RtRw::join('qc_lanes', 'rt_rws.kode_vin', '=', 'qc_lanes.kode_vin')
                 ->select('rt_rws.*', 'qc_lanes.*')
                 ->get();
        return response()->json($model);
    }

    public function tambah(Request $request)
    {
        $data = LoadingZone::create([
            'kode_vin' => $request->kodeVin,
            'model' => $request->model,
            'tgl_install' => $request->tgl_install,
            'waktu_in' => $request->waktu_in,
            'wsd_lz' => $request->wsd_lz,
            'fr_lz' => $request->fr_lz,
            'fl_lz' => $request->fl_lz,
            'rr_lz' => $request->rr_lz,
            'rl_lz' => $request->rl_lz,
            'qtrr_lz' => $request->qtrr_lz,
            'qtrl_lz' => $request->qtrl_lz,
            'bdr_lz' => $request->bdr_lz,
            'pic' => $request->pic,
            'team' => $request->team,
            'waktu_out' => $request->waktu_out
        ]);
        $data->save();
        return redirect('/dashboard/loading-zone')->with('success', 'Data telah berhasil ditambahkan!');
    }
}
