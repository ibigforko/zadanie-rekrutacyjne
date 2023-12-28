<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'tax_no' => 'required|max:255',
            'address' => 'nullable|max:255',
            'country' => 'nullable|max:255',
            'logo' => 'nullable|mimes:jpeg,jpg,png|max:10000',
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'Nazwa',
            'tax_no' => 'NIP',
            'address' => 'Adres',
            'country' => 'Państwo',
            'logo' => 'Logo',
        ];
    }
}
