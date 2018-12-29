<?php

namespace App\Http\Requests\Network;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    use \App\Support\AddSlugToRequest;
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
            'name' => 'required',
            'slug' => "required|unique:categories,slug,{$this->segment(3)},id",
        ];
    }
}
