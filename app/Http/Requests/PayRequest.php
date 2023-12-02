<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|int',
            'kamar_id' => 'required|int',
            'total_price' => 'required|string',
            'nama_pemesan' => 'required|string',
            'tgl_sewa' => 'required|date',
            'durasi_sewa' => 'required|int|max:50',
            'status' => 'required|string|max:50',
        ];
    }
}
