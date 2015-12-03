<?php

namespace App\Http\Requests\Sample\Hoge;

use App\Http\Requests\Request;

class CreateRequest extends Request
{
    // public $body;
    // public $description;

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
            'body' => 'required',
        ];
    }
}
