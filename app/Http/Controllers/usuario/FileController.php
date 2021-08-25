<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tblusla;
use App\Models\Tbllmna;
use Carbon\Carbon;

class FileController extends Controller
{

    public function index()
    {
        return view('usuario.file.index', [
            'laminas' => Tblusla::with('lamina')->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show(Request $request,$id)
    {

    }

    public function edit($id)
    {
        return view('usuario.file.edit', [
            'lamina' => Tbllmna::where('tbllmnauuid',$id)->first()
        ]);
    }

    public function update(Request $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
