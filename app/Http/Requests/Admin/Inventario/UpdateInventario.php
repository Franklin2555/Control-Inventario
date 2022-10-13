<?php

namespace App\Http\Requests\Admin\Inventario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateInventario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.inventario.edit', $this->inventario);
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
            'unidades' => ['sometimes', 'string'],
            'costo' => ['sometimes', 'numeric'],
            
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
