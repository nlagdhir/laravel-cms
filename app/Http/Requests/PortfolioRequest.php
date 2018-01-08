<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PortfolioRequest extends Request
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
                    'project_name'=>'required',
                    'project_slug'=>'required|unique:portfolios|alpha_dash',
                    'project_thumb'=>'required|image|max:512|mimes:jpeg,jpg,png|image_size:635-655,410-430',
                ];
            }
            case 'PATCH':
            {
                return [
                    'project_name'=>'required',
                    'project_slug'=>'required',
                    'project_slug'=>'required|unique:portfolios|alpha_dash',
                    'project_thumb'=>'image|max:512|mimes:jpeg,jpg,png|image_size:635-655,410-430',
                ];
            }
            default:break;
        }
        return [
            
        ];
    }
}
