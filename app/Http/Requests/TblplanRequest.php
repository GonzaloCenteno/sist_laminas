<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblplanRequest extends FormRequest
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
            'tblplannomb' => 'required',
            'tblplandesc' => 'required',
            'tblplancost' => 'required',
            'tblplanprdo' => 'not_in:0'
        ];
    }

    public function messages()
    {
        return [
            'tblplannomb.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO',
            'tblplandesc.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
            'tblplancost.required' => 'EL CAMPO COSTO ES OBLIGATORIO',
            'tblplanprdo.not_in' => 'EL CAMPO PERIODO ES OBLIGATORIO'
        ];
    }
}
