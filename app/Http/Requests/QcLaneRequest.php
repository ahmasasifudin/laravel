<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class QcLaneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        // $rules = [
        //     'kode_vin' => 'required',
        //     'model' => 'required',
        //     'tgl_install' => 'required',
        //     'waktu_in' => 'required',
        //     'keterangan_in' => 'required',
        //     'wsd_code' => 'required',
        //     'fr_code' => 'required',
        //     'fl_code' => 'required',
        //     'rr_code' => 'required',
        //     'rl_code' => 'required',
        //     'qtrr_code' => 'required',
        //     'qtrl_code' => 'required',
        //     'bdr_code' => 'required',
        //     'team' => 'required',
        //     'wsd_pic' => 'required',
        //     'fr_pic' => 'required',
        //     'fl_pic' => 'required',
        //     'rr_pic' => 'required',
        //     'rl_pic' => 'required',
        //     'qtrr_pic' => 'required',
        //     'qtrl_pic' => 'required',
        //     'bdr_pic' => 'required',
        //     'pic' => 'required',
        //     'waktu_out' => 'required'
        // ];

        // if (Auth::user()->role == 'admin') {
        //     $rules = array_merge($rules, [
        //         'wsd_pic' => 'nullable',
        //         'fr_pic' => 'nullable',
        //         'fl_pic' => 'nullable',
        //         'rr_pic' => 'nullable',
        //         'rl_pic' => 'nullable',
        //         'qtrr_pic' => 'nullable',
        //         'qtrl_pic' => 'nullable',
        //         'bdr_pic' => 'nullable',
        //         'pic' => 'nullable',
        //         'waktu_out' => 'nullable',
        //     ]);
        // }
        // return $rules;
    }
}