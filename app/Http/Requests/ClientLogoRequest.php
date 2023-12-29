<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ClientLogo;

class ClientLogoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'logo' => 'nullable|mimes:jpg,jpeg,png,svg|max:10000',
        ];
    }


    public function attributes()
    {
        return [ 'logo' => 'Logo' ];
    }

    public function addLogo():? String
    {
        return optional($this->file("logo")->move(public_path("logos"), $this->logo->getClientOriginalName()), function ($logo) {
            return "/logos/{$logo->getFilename()}";
        }) ?? null;
    }

    public function actualise(): Bool
    {
        return (bool) ClientLogo::create([
            'client_id' => $this->client->id,
            'path' => $this->addLogo()
        ]);
    }
}
