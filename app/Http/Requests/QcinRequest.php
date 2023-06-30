<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QcinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'image' => 'image|file|mimes:jpg.jpeg,png,svg|max:1024',
            // 'kode_vin' => 'required',
            // 'model' => 'required|max:255',
            // 'waktu' => 'required',
            // 'tgl_install' => 'required',
            // 'date' => 'required',
            // 'keterangan' => 'required',
            // 'unit' => 'required',
            // 'pic' => 'required'
        ];
    }
}
