<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class SiswaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PATCH') 
        {
            //$nisn_rules = 'required|string|size:4|unique:siswa,nisn,' . $this->get('id');
            //$no_telepon = 'sometimes|numeric|digits_between:10,15|unique:telepon,no_telepon,' . $this->get('id') . ',id_siswa'; 

            $nama_siswa = 'required|string|max:30';
            $tgl_lahir = 'required|date';
            $jenis_kelamin = 'required|in:L,P';
            //'id_kelas' => 'required',
        }
        else
        {
            $nama_siswa = 'required|string|max:30';
            $tgl_lahir = 'required|date';
            $jenis_kelamin = 'required|in:L,P';
        }
        

        return [
            'nisn'  => 'required|string|size:4|unique:siswa,nisn',
            'nama_siswa'   => $nama_siswa,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telepon' => 'sometimes|numeric|digits_between:10,15|unique:telepon,no_telepon',
            'id_kelas' => 'required',
        ];
    }
}
