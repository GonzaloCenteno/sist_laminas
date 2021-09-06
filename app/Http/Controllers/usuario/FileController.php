<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbluspl;
use App\Models\Tbllmna;
use App\Models\Tblctga;
use Carbon\Carbon;

class FileController extends Controller
{

    public function index(Request $request)
    {
        $laminas = $this->obtener_laminas_por_plan(Auth::user()->tblusrocdgo);
        $categorias = Tblctga::get();

        if ($request->ajax()) {
            return view('usuario.file.pagination', compact('laminas','categorias'))->render(); 
        }

        return view('usuario.file.index',compact('laminas','categorias'));
    }

    private function obtener_laminas_por_plan($usuario)
    {
        try{
            throw_unless(Tbluspl::where([['tblusrocdgo',$usuario],['tblusplflag','A']])->first(), new \Exception('flta validar'));
            return Tbllmna::where('tbllmnatipo','O')->paginate(4);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
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
