<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalvaDespesaRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'categoria_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'valor.required' => 'O campo valor é obrigatório.',
            'valor.numeric' => 'O campo valor deve ser numérico.',
            'data.required' => 'O campo data de pagamento é obrigatório.',
            'data.date' => 'O campo data de pagamento deve ser uma data válida.',
            'categoria_id.required' => 'O campo categoria é obrigatório.',
            'categoria_id.numeric' => 'O campo categoria deve ser numérico.',
        ];
    }

}
