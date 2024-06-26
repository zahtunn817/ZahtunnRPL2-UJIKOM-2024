<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbsensiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'namaKaryawan' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return ['namaKaryawan.required' => 'Anda belum memasukkan NAMA KARYAWAN!', 'status.required' => 'Anda belum memasukkan Status!'];
    }
}
