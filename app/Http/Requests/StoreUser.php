<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'gender' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'nrc' => 'required',
            'photo' => 'required|mimes:jpg,png,jpeg,webp|max:2048',
            'frontphoto' => 'required|mimes:jpg,png,jpeg,webp|max:2048',
            'backphoto' => 'required|mimes:jpg,png,jpeg,webp|max:2048',
            'joindate' => 'required',



        ];
    }
}
