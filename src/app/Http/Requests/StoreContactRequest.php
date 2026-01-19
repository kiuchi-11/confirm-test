<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'last_name'     => ['required', 'string'],
            'first_name'    => ['required', 'string'],
            'gender'        => ['required', 'in:1,2,3'],
            'email'         => ['required', 'email'],
            'tel1'          => 'required|regex:/^[0-9]+$/',
            'tel2'          => 'required|regex:/^[0-9]+$/',
            'tel3'          => 'required|regex:/^[0-9]+$/',
            'address'       => ['required', 'string'],
            'category_id'   => ['required', 'exists:categories,id'],
            'content'       => ['required', 'string', 'max:120'],
        ];
    }
}
