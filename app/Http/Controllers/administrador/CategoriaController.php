<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tblctga;
use App\Http\Requests\TblctgaRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriaController extends Controller
{

    public function index()
    {
        return view('administrador.categoria.index');
    }

    public function create()
    {
        //
    }

    public function store(TblctgaRequest $request)
    {
        // if(!$request->ajax()) return redirect('/');
        return Tblctga::create($request->all());
    }

    public function show(Request $request,$id)
    {
        return datatables()->of(Tblctga::get())->make(true);
    }

    public function edit($id)
    {
        //
    }

    public function update(TblctgaRequest $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
