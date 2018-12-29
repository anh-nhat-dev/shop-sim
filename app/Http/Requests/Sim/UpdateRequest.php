<?php

namespace App\Http\Requests\Sim;

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
            'slug' => "required|unique:sims,slug,{$this->segment(3)},id",
            'category_id' => 'required',
            'network_id' => 'required',
            'number' => 'required|numeric',
            'price' => 'required|numeric'
        ];
    }
}
