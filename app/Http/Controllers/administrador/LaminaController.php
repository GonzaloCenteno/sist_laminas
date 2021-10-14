<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Tbllmna, Tblctga, Tbllmct };
use App\Http\Requests\TbllmnaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use File;

class LaminaController extends Controller
{
    public function index()
    {
        return view('administrador.lamina.index');
    }

    public function create()
    {
        return view('administrador.lamina.create', [
            'categorias' => Tblctga::get()
        ]);
    }

    public function store(TbllmnaRequest $request)
    {
        if(!$request->ajax()) return redirect('/');
        DB::beginTransaction();
        try{
            $request['tbllmnauuid'] = Str::random(12);
            $request['tbllmnafech'] = date('Y-m-d');
            $lamina = Tbllmna::create($request->all());
            $lamina->categorias()->attach($request['tblctgacdgo']);
            DB::commit();
            return response()->json(['success' => 'success'], 200);
        } catch (\Exception $ex) {
            DB::rollback();  
            return response($ex->getMessage(), 500);               
        }
    }

    public function show(Request $request,$id)
    {
        return datatables()->of(Tbllmna::get())
            ->addColumn('categorias', function ($a) {
                return Tbllmct::where('tbllmnacdgo',$a->tbllmnacdgo)->get()->pluck('categoria.tblctgadesc')->toArray();
            })
            ->addColumn('action', function ($c) {
                if($c->tbllmnalmrd == 1):
                    $cheked = '<div class="row">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input type="checkbox" style="height:25px; width:100%" onChange="cambiarEstado('.$c->tbllmnacdgo.',0)" class="form-check-input pt-0 mt-0" id="check_'.$c->tbllmnacdgo.'">
                                            <label class="form-check-label" for="check_'.$c->tbllmnacdgo.'"></label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button onClick="traer_lamina('."$c->tbllmnacdgo".')" class="btn btn-outline-warning btn-sm btn-rounded py-1 my-0 px-2"><i class="fa fa-edit fa-2x"></i></button>
                                    </div>
                                    <div class="col-4">
                                        <button onClick="eliminar_lamina('."$c->tbllmnacdgo".',\''.$c->tbllmnacoda.'\',\''.$c->tbllmnanomb.'\')" class="btn btn-outline-danger btn-sm btn-rounded py-1 my-0 px-2"><i class="fa fa-trash fa-2x"></i></button>
                                    </div>
                                </div>';
                else:
                    $cheked ='<div class="row">
                                    <div class="col-2">
                                        <div class="form-check">
                                            <input type="checkbox" style="height:25px; width:100%" checked onChange="cambiarEstado('.$c->tbllmnacdgo.',1)" class="form-check-input pt-0 mt-0" id="check_'.$c->tbllmnacdgo.'">
                                            <label class="form-check-label" for="check_'.$c->tbllmnacdgo.'"></label>
                                        </div>
                                    </div>  
                                    <div class="col-4">
                                        <button onClick="traer_lamina('."$c->tbllmnacdgo".')" class="btn btn-outline-warning btn-sm btn-rounded py-1 my-0 px-2"><i class="fa fa-edit fa-2x"></i></button>
                                    </div>
                                    <div class="col-4">
                                        <button onClick="eliminar_lamina('."$c->tbllmnacdgo".',\''.$c->tbllmnacoda.'\',\''.$c->tbllmnanomb.'\')" class="btn btn-outline-danger btn-sm btn-rounded py-1 my-0 px-2"><i class="fa fa-trash fa-2x"></i></button>
                                    </div>
                            </div>';
                endif;
                return $cheked;
            })->make(true);
    }

    public function edit(Request $request,$opc)
    {
        switch ($opc):
            case 1: return $this->ObtenerLosMasVistos($request); break;
            case 2: return $this->ObtenerDatosLamina($request); break;
        endswitch;
    }

    private function ObtenerLosMasVistos($request)
    {
        if(!$request->ajax()) return redirect('/');
        Tbllmna::where('tbllmnacdgo',$request->cdgo)->update([ 'tbllmnalmrd' => $request->estado ]);
        return response()->json(['success' => 'success'], 200);
    }

    private function ObtenerDatosLamina($request)
    {
        if(!$request->ajax()) return redirect('/');
        return view('administrador.lamina.edit', [
            'categorias' => Tblctga::get(),
            'lamina' => Tbllmna::where('tbllmnacdgo',$request->tbllmnacdgo)->first(),
            'relaciones' => Tbllmct::where('tbllmnacdgo',$request->tbllmnacdgo)->get()->pluck('tblctgacdgo')->toArray()
        ]);
    }

    public function update(TbllmnaRequest $request, $id)
    {
        if(!$request->ajax()) return redirect('/');
        DB::beginTransaction();
        try{
            $lamina = Tbllmna::find($id);
            $lamina->update($request->all());
            $lamina->categorias()->sync($request['tblctgacdgo']);
            DB::commit();
            return response()->json(['success' => 'success'], 200);
        } catch (\Exception $ex) {
            DB::rollback();  
            return response($ex->getMessage(), 500);               
        }
    }

    public function destroy(Request $request, $id)
    {
        if(!$request->ajax()) return redirect('/');
        $lamina = Tbllmna::find($id);
        Tbllmna::where('tbllmnacdgo',$id)->delete();
        File::delete($lamina->tbllmnaimgo,$lamina->tbllmnaimgf,$lamina->tbllmnapdfl);
        return response()->json(['success' => 'success'], 200);
    }
}
