<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
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
            'paciente_id' => 'required',
            'usuario_id' => 'required',
            'procedimento_id' => 'required',
            'data' => 'required|date',
            'horario' => 'required',
            'status' => 'required',
            'observacoes' => 'required'
        ];
    }
}
