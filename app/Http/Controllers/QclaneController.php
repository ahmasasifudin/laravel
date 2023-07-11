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

    public function getData($id)
    {
        $model = QcIn::where('kode_vin', $id)->get();
        return response()->json($model);
    }

    public function tambah(Request $request)
    {
        // $data = QcLane::create($request->all());
        $data = QcLane::create([
            'kode_vin' => $request->kodeVin,
            'model' => $request->model,
            'tgl_install' => $request->tgl_install,
            'waktu_in' => $request->waktu_in,
            'keterangan_in' => $request->keterangan_in,
            'wsd_code' => $request->wsd_code,
            'wsd_pic' => $request->wsd_pic,
            'fr_code' => $request->fr_code,
            'fr_pic' => $request->fr_pic,
            'fl_code' => $request->fl_code,
            'fl_pic' => $request->fl_pic,
            'rr_code' => $request->rr_code,
            'rr_pic' => $request->rr_pic,
            'rl_code' => $request->rl_code,
            'rl_pic' => $request->rl_pic,
            'qtrr_code' => $request->qtrr_code,
            'qtrr_pic' => $request->qtrr_pic,
            'qtrl_code' => $request->qtrl_code,
            'qtrl_pic' => $request->qtrl_pic,
            'bdr_code' => $request->bdr_code,
            'bdr_pic' => $request->bdr_pic,
            'pic' => $request->pic,
            'team' => $request->team,
            'waktu_out' => $request->waktu_out
        ]);
        $data->save();
        return redirect('/dashboard/qc-lane')->with('success', 'Data telah berhasil ditambahkan!');
    }
}
