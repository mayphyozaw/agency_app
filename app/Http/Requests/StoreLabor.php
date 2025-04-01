<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLabor extends FormRequest
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
            'name' => 'required',

            'passport_number' => 'required',
            'passport_issue_date' => 'required',
            'passport_expired_date' => 'required',
            'passport_place' => 'required',

            'owic_card_number' => 'required',
            'owic_card_issue_date' => 'required',
            'owic_card_submit_date' => 'required',

        ];
    }
}
