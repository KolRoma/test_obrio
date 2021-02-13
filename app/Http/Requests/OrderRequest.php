<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'full_name' => ['string', 'max:255'],
            'email'     => ['string', 'email:rfc,dns', 'max:255'],
            'astrologer_service_id' => ['required', 'int', 'exists:astrologer_service,id'],
        ];
    }
}
