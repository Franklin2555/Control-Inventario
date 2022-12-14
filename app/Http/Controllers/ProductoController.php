<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categorium;
use App\Models\Inventario;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(10);

        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $categorias = Categorium::pluck('categoria', 'id');
        $inventario = Inventario::pluck('Producto', 'id');
        return view('producto.create', compact('producto','categorias','inventario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('producto.index')
            ->with('success', 'Producto creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $categorias = Categorium::pluck('categoria', 'id');
        $inventario = Inventario::pluck('Producto', 'id');

        return view('producto.show', compact('producto','categorias','inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categorium::pluck('categoria', 'id');
        $inventario = Inventario::pluck('Producto', 'id');

        return view('producto.edit', compact('producto','categorias','inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('producto.index')
            ->with('success', 'Producto actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('producto.index')
            ->with('success', 'Producto eliminado con éxito');
    }

    public function share(Request $request)
    {
        $buscar = $searchTerm = '%'.$request->buscarP.'%';
        $productos = Producto::where('producto', 'like', $buscar)->paginate(10)->withQueryString();
        // dd($query);
        return view('producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());

    }
    public function report(Request $request)
    {
        $buscar = $searchTerm = '%'.$request->filterPDF.'%';
        $productos = Producto::where('created_at','like', $buscar)->get();
        $pdf = SnappyPdf::loadView('producto.report', compact('productos'));
        return $pdf->inline('productos.pdf');
    }
}
