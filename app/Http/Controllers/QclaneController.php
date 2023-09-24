<?php

namespace App\Http\Controllers;

use App\Http\Requests\QcLaneRequest;
use App\Models\QcIn;
use App\Models\QcLane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QclaneController extends Controller
{
    public function index()
    {
        $qc_ins = QcIn::leftJoin('qc_lanes', 'qc_ins.kode_vin', '=', 'qc_lanes.kode_vin')
            ->where(function ($query) {
                $query->whereNull('qc_lanes.kode_vin')
                    ->orWhere(function ($query) {
                        $query->where(function ($query) {
                            $query->where('qc_lanes.waktu_out', '=', null);
                        });
                    });
                })
            ->select('qc_ins.kode_vin')
            ->get();
    
        return view('dashboard.qc-lane.index', compact('qc_ins'));
    }

    public function getData($id)
    {
        $model = QcIn::leftJoin('qc_lanes', 'qc_ins.kode_vin', '=', 'qc_lanes.kode_vin')
            ->where('qc_ins.kode_vin', $id)
            ->select('qc_ins.*', 'qc_lanes.tgl_install', 'qc_lanes.waktu_in', 'qc_lanes.wsd_code', 'qc_lanes.fr_code', 'qc_lanes.fl_code', 'qc_lanes.rr_code', 'qc_lanes.rl_code', 'qc_lanes.qtrr_code', 'qc_lanes.qtrl_code', 'qc_lanes.bdr_code', 'qc_lanes.team_lane')
            ->get();

        return response()->json($model);
    }

    public function tambah(Request $request)
    {
        $kode_vin = $request->input('kodeVin');
        
        // Cek apakah data dengan kode_vin tertentu sudah ada dalam database
        $existingData = QcLane::where('kode_vin', $kode_vin)->first();

        if ($existingData) {
            $existingData->update([
                'wsd_pic' => $request->wsd_pic,
                'fr_pic' => $request->fr_pic,
                'fl_pic' => $request->fl_pic,
                'rr_pic' => $request->rr_pic,
                'rl_pic' => $request->rl_pic,
                'qtrr_pic' => $request->qtrr_pic,
                'qtrl_pic' => $request->qtrl_pic,
                'bdr_pic' => $request->bdr_pic,
                'pic' => $request->pic,
                'waktu_out' => $request->waktu_out,

                'model' => $request->model,
                'tgl_install' => $request->tgl_install,
                'waktu_in' => $request->waktu_in,
                'keterangan_in' => $request->keterangan_in,
                'wsd_code' => $request->wsd_code,
                'fr_code' => $request->fr_code,
                'fl_code' => $request->fl_code,
                'rr_code' => $request->rr_code,
                'rl_code' => $request->rl_code,
                'qtrr_code' => $request->qtrr_code,
                'qtrl_code' => $request->qtrl_code,
                'bdr_code' => $request->bdr_code,
                'team_lane' => $request->team,
            ]);
            
        } else {

            $data = QcLane::create([
                'kode_vin' => $request->kodeVin,
                'model' => $request->model,
                'tgl_install' => $request->tgl_install,
                'waktu_in' => $request->waktu_in,
                'keterangan_in' => $request->keterangan_in,
                'wsd_code' => $request->wsd_code,
                'fr_code' => $request->fr_code,
                'fl_code' => $request->fl_code,
                'rr_code' => $request->rr_code,
                'rl_code' => $request->rl_code,
                'qtrr_code' => $request->qtrr_code,
                'qtrl_code' => $request->qtrl_code,
                'bdr_code' => $request->bdr_code,
                'team_lane' => $request->team,

                'wsd_pic' => $request->wsd_pic,
                'fr_pic' => $request->fr_pic,
                'fl_pic' => $request->fl_pic,
                'rr_pic' => $request->rr_pic,
                'rl_pic' => $request->rl_pic,
                'qtrr_pic' => $request->qtrr_pic,
                'qtrl_pic' => $request->qtrl_pic,
                'bdr_pic' => $request->bdr_pic,
                'pic' => $request->pic,
                'waktu_out' => $request->waktu_out,
            ]);
            
            $data->save();
        }

        return redirect('/dashboard/qc-lane')->with('success', 'Data telah berhasil ditambahkan!');
    }
}
