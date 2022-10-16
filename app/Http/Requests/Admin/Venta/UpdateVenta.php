<?php

namespace App\Http\Requests\Admin\Venta;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateVenta extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.venta.edit', $this->ventum);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'producto' => ['sometimes', 'string'],
            'cantidad' => ['sometimes', 'string'],
            'precio' => ['sometimes', 'numeric'],
            'total_venta' => ['sometimes', 'string'],
            'fecha_venta' => ['sometimes', 'date'],
            'producto_id' => ['sometimes', 'integer'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
