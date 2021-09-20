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
        if(!$request->ajax()) return redirect('/');
        unset($request['_token']);
        return Tblctga::updateOrCreate( ['tblctgacdgo' => $request->tblctgacdgo], $request->all());
    }

    public function show(Request $request,$id)
    {
        return datatables()->of(Tblctga::get())->addColumn('action', function ($c) {
            return "<button onClick='traer_categoria(".$c.")' class='btn btn-outline-warning btn-sm btn-rounded py-1 my-0 btnExtraer'><i class='fa fa-edit fa-2x'></i></button>";
        })->make(true);
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
