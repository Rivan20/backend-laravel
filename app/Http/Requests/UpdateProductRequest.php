<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Tentukan apakah user diizinkan untuk melakukan request ini.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; 
    }

    /**
     * Tentukan aturan validasi untuk request ini.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',  
            'price' => 'required|numeric|min:0',  
            'stock' => 'required|integer|min:0',  
        ];
    }
}
