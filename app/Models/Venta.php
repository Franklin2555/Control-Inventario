<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $producto
 * @property $cantidad
 * @property $precio
 * @property $total_venta
 * @property $fecha_venta
 * @property $producto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'producto' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'total_venta' => 'required',
		'fecha_venta' => 'required',
		'producto_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto','cantidad','precio','total_venta','fecha_venta','producto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    

}
