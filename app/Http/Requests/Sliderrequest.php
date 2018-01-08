<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Sliderrequest extends Request
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
                     'title' => 'required',
                    // file size between:100,512 , min:10 , max:100 , size:100
                    // 'logo' => 'required|image|image_aspect:16:9',
                    // 'logo' => 'required|image|image_aspect:1',
                    // 'logo' => 'required|image|image_size:300,*',
                    // 'logo' => 'required|image|image_size:>=100,200-300',
                    // 'logo' => 'required|image|image_size:300,*',
                    // 'logo' => 'required|image|image_size:<=300',
                    // 'logo' => 'required|image|image_size:300,400',
                    'image'=>'image|max:512|mimes:jpeg,jpg,png|image_size:930-940,320-330',
                    'url'=>'required|url',
                ];
            }
            case 'POST':
            {
                return [
                    'title' => 'required',
                    'image'=>'required|image|max:512|mimes:jpeg,jpg,png|image_size:930-940,320-330',
                    'url'=>'required|url',
                ];
            }
                
            default:break;
        }
    }
}
