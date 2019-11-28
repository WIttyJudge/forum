<?php

namespace App\Http\Requests\Forum;

use Illuminate\Foundation\Http\FormRequest;

class ThreadStoreRequest extends FormRequest
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
            'title' => 'required|max:60',
            'text' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     *@return array
     */

    // public function message()
    // {
    //     return [
    //         'title.required' => 'Email is required!',
    //         'text.required' => 'Name is required!',
    //         'title.min' => 'You need min'
    //     ];
    // }
}
