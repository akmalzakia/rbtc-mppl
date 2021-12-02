<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'slug' => ['required', 'unique:book'],
            'publisher' => 'required|max:40',
            'year_published' => 'required|numeric|min:1900|max:2018',
            'description' => 'required'
        ];
    }
}
