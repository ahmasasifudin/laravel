<?php

namespace App\Http\Controllers;

use App\Models\QcIn;
use App\Models\QcLane;
use App\Models\RtRw;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LaporanDivisiController extends Controller
{
    public function index()
    {
        return view('dashboard.laporan.laporan-divisi.index');
    }

    public function indexQcIn()
    {
        $qcin = QcIn::all();
        return view('dashboard.laporan.laporan-divisi.qcin', compact('qcin'));
    }

    public function indexQcLane()
    {
        $qclane = QcLane::all();
        return view('dashboard.laporan.laporan-divisi.qclane', compact('qclane'));
    }

    public function indexRtRw()
    {
        $rtrw = RtRw::join('qc_lanes', 'rt_rws.kode_vin', '=', 'qc_lanes.kode_vin')
            ->select('rt_rws.*', 'qc_lanes.wsd_code', 'qc_lanes.fr_code', 'qc_lanes.fl_code', 'qc_lanes.rr_code', 'qc_lanes.rl_code', 'qc_lanes.qtrr_code', 'qc_lanes.qtrl_code', 'qc_lanes.bdr_code')
            ->get();
        return view('dashboard.laporan.laporan-divisi.rtrw', compact('rtrw'));
    }

    public function indexAll()
    {
        $all = QcLane::join('rt_rws', 'qc_lanes.kode_vin', '=', 'rt_rws.kode_vin')
            ->select('qc_lanes.*', 'rt_rws.*')
            ->get();
        return view('dashboard.laporan.laporan-keseluruhan.all', compact('all'));
    }
}
