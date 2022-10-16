<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'producto',
        'cantidad',
        'precio',
        'total_venta',
        'fecha_venta',
        'producto_id',
    
    ];
    
    
    protected $dates = [
        'fecha_venta',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/ventas/'.$this->getKey());
    }
}
