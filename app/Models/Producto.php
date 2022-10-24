<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $producto
 * @property $tiempo
 * @property $precio
 * @property $categoria_id
 * @property $inventario_id
 *
 * @property Categorium $categorium
 * @property Inventario $inventario
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'producto' => 'required',
		'tiempo' => 'required',
		'precio' => 'required',
		'categoria_id' => 'required',
		'inventario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto','tiempo','precio','categoria_id','inventario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categorium()
    {
        return $this->hasOne('App\Models\Categorium', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inventario()
    {
        return $this->hasOne('App\Models\Inventario', 'id', 'inventario_id');
    }
    

}
