<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;

/**
 * Class InventarioController
 * @package App\Http\Controllers
 */
class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::paginate(10);

        return view('inventario.index', compact('inventarios'))
            ->with('i', (request()->input('page', 1) - 1) * $inventarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventario = new Inventario();
        return view('inventario.create', compact('inventario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inventario::$rules);

        $inventario = Inventario::create($request->all());

        return redirect()->route('inventario.index')
            ->with('success', 'Inventario creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);

        return view('inventario.show', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);

        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inventario $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        request()->validate(Inventario::$rules);

        $inventario->update($request->all());

        return redirect()->route('inventario.index')
            ->with('success', 'Inventario actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id)->delete();

        return redirect()->route('inventario.index')
            ->with('success', 'Inventario eliminado con éxito');
    }

    public function share(Request $request)
    {
        $buscar = $searchTerm = '%'.$request->buscarI.'%';
        $inventarios = Inventario::where('producto', 'like', $buscar)->paginate(10)->withQueryString();
        // dd($query);
        return view('inventario.index', compact('inventarios'))
            ->with('i', (request()->input('page', 1) - 1) * $inventarios->perPage());

    }
    public function report(Request $request)
    {
        $buscar = $searchTerm = '%'.$request->filterPDF.'%';
        $inventarios = Inventario::where('created_at','like', $buscar)->get();
        $pdf = SnappyPdf::loadView('inventario.report', compact('inventarios'));
        return $pdf->inline('Inventario.pdf');
    }
}
