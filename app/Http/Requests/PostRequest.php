<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
        switch ($this->method()) {
            case 'PATCH':
            {
                return [
                    'title' =>'required',
                    'content' => 'required',
                    'image' => 'image|max:512|mimes:jpeg,jpg,png|image_size:300,196',
                ];
            }
            case 'POST':
            {
                return [
                    'title' =>'required',
                    'content' => 'required',
                    'image' => 'required|image|max:512|mimes:jpeg,jpg,png|image_size:300,196',
                ];
            }
                
            
            default:break;
        }
    }
}
