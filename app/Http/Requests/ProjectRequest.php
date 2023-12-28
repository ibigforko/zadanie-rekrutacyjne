<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|max:255',
            'client_id' => 'nullable|integer',
            'deadline' => 'nullable|date',
            'description' => 'nullable|max:2048',
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Nazwa',
            'client_id' => 'Klient',
            'deadline' => 'Termin',
            'description' => 'Opis projektu',
        ];
    }
}
