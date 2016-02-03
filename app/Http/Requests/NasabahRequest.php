<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NasabahRequest extends Request
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
          return [
              'nama_lengkap'=>'required',
              'no_rekening'=>'required'
          ];
      }

      public function messages()
      {
        return [
            'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
            'no_rekening.required' => 'No Rekening tidak boleh kosong'
        ];
      }
}
