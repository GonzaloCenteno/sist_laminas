<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;

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
        return datatables()->of(User::where('tblusrotipo','USR'))->make(true);
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
