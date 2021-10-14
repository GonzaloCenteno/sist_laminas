<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TbltagsRequest extends FormRequest
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
            'tbltagsdesc' => ['required', Rule::unique('tbltags','tbltagsdesc')->ignore($this->tag,'tbltagscdgo')],
        ];
    }

    public function messages()
    {
        return [
            'tbltagsdesc.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
            'tbltagsdesc.unique' => 'ESTE REGISTRO YA FUE INGRESADO'
        ];
    }
}
