<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        date_default_timezone_set("America/El_Salvador");
        $fecha = date('Y-m-d');
        $filtrados = Venta::all();
        $ventas =  Venta::whereDate('fecha_venta',$fecha)->paginate(10);
        $total = $ventas->SUM('total_venta');
        $VentasPorDia = [];
        foreach ($ventas as $venta) {
            $VentasPorDia[] = ['name' => $venta['producto'], 'y' => floatval($venta['cantidad'])];
        }
        return view("home", compact('ventas','total','filtrados'),  ["data" => json_encode($VentasPorDia)])
        ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage());
    }
}
