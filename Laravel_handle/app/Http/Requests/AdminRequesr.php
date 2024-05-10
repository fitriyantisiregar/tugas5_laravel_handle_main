<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequesr extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'=> 'required|string|min:3|max:255',
            'stok' => 'required|min:3|max:255',
            'berat'=> 'required|integer|',
            'harga'=> 'required|integer',
            'deskripsi' =>'required|string|min:10|max:225',
            'kondisi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
