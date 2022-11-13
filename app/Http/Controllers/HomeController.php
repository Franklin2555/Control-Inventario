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
    public function index(Request $request) 
    {
        date_default_timezone_set('America/El_Salvador');

        if (isset($_GET['filtrar']))
        {
            $buscar = $searchTerm = '%'.$request->filtrar.'%';

            $detalleVenta = Venta::where('fecha_venta','like', $buscar)->paginate(10)->withQueryString();

            $ventasSearch = Venta::where('fecha_venta','like', $buscar)->get();

            $total = $detalleVenta->SUM('total_venta');

            $TodasLasVentas = [];
            
            foreach ($ventasSearch as $venta) 
            {
                $TodasLasVentas[] = ['name' => $venta['producto'], 'y' => floatval($venta['cantidad'])];
            }
            return view("home", compact('ventasSearch','total','detalleVenta'),  ["data" => json_encode($TodasLasVentas)])
            ->with('i', (request()->input('page', 1) - 1) * $detalleVenta->perPage());
        }
        else
        {
            $fecha = date('Y-m-d');

            $ventasgraphics =  Venta::whereDate('fecha_venta',$fecha)->get();

            $detalleVenta = Venta::whereDate('fecha_venta',$fecha)->paginate(3);

            $total = $detalleVenta->SUM('total_venta');

            $VentasPorDia = [];

            foreach ($ventasgraphics as $venta) 
            {
                $VentasPorDia[] = ['name' => $venta['producto'], 'y' => floatval($venta['cantidad'])];
            }
            return view("home", compact('ventasgraphics','total','detalleVenta'),  ["data" => json_encode($VentasPorDia)])
            ->with('i', (request()->input('page', 1) - 1) * $detalleVenta->perPage());
        }
    }
}
