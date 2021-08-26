<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class themMoiSlideRequest extends FormRequest
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
            'title'             => 'required',
            'subtitle'          => 'required',
            'des'               => 'required',
            'href'              => 'required',
            'btn'               => 'required',
            'url'               => 'required',
            'where_view'        => 'required',
        ];
    }
}
