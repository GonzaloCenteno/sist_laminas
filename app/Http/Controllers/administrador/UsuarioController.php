<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Tblctga;
// use App\Http\Requests\TblctgaRequest;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function index()
    {
        return view('administrador.usuario.index');
    }

    public function create()
    {
        //
    }

    public function store(TblctgaRequest $request)
    {

    }

    public function show(Request $request,$id)
    {
        
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
