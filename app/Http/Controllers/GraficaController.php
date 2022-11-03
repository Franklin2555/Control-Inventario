<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;

class GraficaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ventas = Venta::paginate(10);
        $total = $ventas->SUM('total_venta');
        $TodasLasVentas = [];
        foreach ($ventas as $venta) {
            $TodasLasVentas[] = ['name' => $venta['producto'], 'y' => floatval($venta['cantidad'])];
        }
        return view('graphics', compact('ventas','total'), ["datos" => json_encode($TodasLasVentas)])
        ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage());
    }
}
