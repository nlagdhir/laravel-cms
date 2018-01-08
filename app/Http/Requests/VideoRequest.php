<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VideoRequest extends Request
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
        switch ($this->getMethod()) {
            case 'POST':
            {
                return [
                    'title'=>'required',
                    'video' => 'required|mimes:mp4',
                ];
            }
            case 'PATCH':
            {
                return [
                    'title'=>'required',
                    'video' => 'mimes:mp4',
                ];
            }
            default:break;
        }
    }
}
