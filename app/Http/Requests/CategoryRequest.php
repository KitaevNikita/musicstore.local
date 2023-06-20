<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'namecategory' => 'required|string|between:0,100',
        ];
    }
    
    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            "namecategory.required" => "Введите название специальности",
            "namecategory.string" => "Поле специальность должно иметь строковое значение",
            "namecategory.between" => "Название специальности должно быть не более 100 символов",
        ];
    }
}