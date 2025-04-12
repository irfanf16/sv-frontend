<?php

namespace App\Http\Requests;

class SaveGuestClientFormRequest extends AbstractFormRequest
{
    public function rules()
    {
        return [
            'client_email' => 'required|email:rfc,dns|max:255',
            'client_name' => 'required|max:255',
            'client_phone' => '',
        ];
    }
}
