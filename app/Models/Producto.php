<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = [
        'nombre',
        'costo',
        'precio',
        'cantidad',
        'fecha_expiracion',
    
    ];
    
    
    protected $dates = [
        'fecha_expiracion',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/productos/'.$this->getKey());
    }
}
