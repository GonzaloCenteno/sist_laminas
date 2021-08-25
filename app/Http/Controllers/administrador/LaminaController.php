<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbllmna;
use App\Models\Tblctga;
// use App\Http\Requests\AreasRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LaminaController extends Controller
{

    public function index()
    {
        return view('administrador.lamina.index', [
            'categorias' => Tblctga::get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request['tbllmnauuid'] = Str::random(12);
        $request['tbllmnafech'] = date('Y-m-d');
        return Tbllmna::create($request->all());
    }

    public function show(Request $request,$id)
    {
        return datatables()->of(Tbllmna::with('categoria')->get())->make(true);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
