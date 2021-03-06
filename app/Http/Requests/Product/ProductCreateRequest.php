<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Request;

class ProductCreateRequest extends Request
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
            //
            'name' => 'require|min:3|unique:prouducts.name',
            'price'=> 'require',
            'marks_id' =>'require',
        ];
    }
}
