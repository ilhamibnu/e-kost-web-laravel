<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataKamarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'kost_id' => 'required|int|max:50',
            'jenis_kamar' => 'required|string|max:50',
            'no_kamar' => 'required|int|max:50',
            'harga' => 'required|int|max:255',
            'status' => 'nullable|int|min:5',
            // 'img_pertama' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'img_kedua' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'image_ketiga' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'image_keempat' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'deskripsi' => 'required|string|max:250',
            'slug' => 'nullable|string|max:100'
        ];
    }
}
