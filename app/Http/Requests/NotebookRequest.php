<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'company' => 'max:40',
            'phone' => 'required|max:9',
            'email' => 'required|email',
            'birthday' => 'date',
            'photo' => 'image',
        ];
        switch ($this->getMethod()) {
            case 'DELETE':
                return [
                    'notebook_id' => 'required|integer'
                ];
        }
    }

    public function message()
    {
        return [
            'name.required' => 'ФИО обязательно для заполнения',
            'phone.required' => 'Номер обязательно для заполнения',
            'email.required' => 'Email обязательно для заполнения',
        ];
    }
}
