<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBodyMassIndexRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'height'=>'required|integer',
            'weight'=>'required|decimal:0,2'
        ];
    }

    public function attributes(): array
    {
        return [
            'height'=>'altura',
            'weight'=>'peso'
        ];
    }
}
