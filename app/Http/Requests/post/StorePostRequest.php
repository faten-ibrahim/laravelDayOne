<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
           
                'title' => 'required|unique:posts|min:3',
                'description' => 'required',
            
        ];
    }

    public function message()
    {
        return [
           
                'title.required' => 'Sorry ! title is required',
                'title.min' => 'Title should not be less than 3 letters',
                'title.unique' => 'Title should be unique ,that title is already exists ',
                'description.required' => 'description is required !',

            

        ];
    }
}
