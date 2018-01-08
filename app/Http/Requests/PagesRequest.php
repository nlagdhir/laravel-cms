<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Page;

class PagesRequest extends Request
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
        $page = Page::find($this->pages);

        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'page_title' => 'required',
                    'page_slug' =>'alpha_dash|unique:pages',
                    'page_thumbnail' => 'image|max:512|mimes:jpeg,jpg,png|image_aspect:8:4'
                ];
            }
            case 'PATCH':
            {
                return [
                    'page_title' => 'required',
                    'page_slug' =>'alpha_dash|unique:pages,page_slug,'.$page->id,
                    'page_thumbnail' => 'image|max:512|mimes:jpeg,jpg,png|image_aspect:8:4'
                ];
            }
            default:break;
        }
    }
}
