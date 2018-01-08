<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeamRequest extends Request
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
            case 'POST':
            {
                return [
                   'name'=>'required',
                   'thumb' => 'required|image|max:512|mimes:jpeg,jpg,png|image_size:242,186',
                   'designation' => 'required',
                ];
            }
            case 'PATCH':
            {
               return [
                   'name'=>'required',
                   'thumb' => 'image|max:512|mimes:jpeg,jpg,png|image_size:242,186',
                   'designation' => 'required',
                ];
            }
            default:break;
        }
    }
}
