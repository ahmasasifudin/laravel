<?php

namespace App\Http\Controllers;

use App\Http\Requests\QcinRequest;
use App\Models\QcIn;
use Illuminate\Http\Request;

class QcinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.qc-in.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QcinRequest $request)
    {
        $data = QcIn::create($request->all());
        
        if($request->hasFile('image')) {
            $request->file('image')->move('images-qcin/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('/dashboard/qc-in')->with('success', 'Data telah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Qcin $qcin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Qcin $qcin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Qcin $qcin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Qcin $qcin)
    {
        //
    }
}
