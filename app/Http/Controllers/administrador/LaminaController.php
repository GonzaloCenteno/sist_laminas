<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbllmna;
use App\Models\Tblctga;
use App\Http\Requests\TbllmnaRequest;
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

    public function store(TbllmnaRequest $request)
    {
        if(!$request->ajax()) return redirect('/');
        try{
            if($request->hasFile('tbllmnaimgn'))
            { 
                foreach($request->tbllmnaimgn as $file)
                {
                    // dd($request->file);
                    // $file->getClientOriginalName();
                    // $bandera = Str::random(12);
                    // $filename = $file->getClientOriginalName();
                    // $fileserver = $bandera.'_'.$filename;
                    // $file->move(public_path('adjuntos/'), htmlentities($fileserver));
                    $request['tbllmnauuid'] = Str::random(12);
                    $request['tbllmnafech'] = date('Y-m-d');
                    $request['tbllmnaimgn'] = 'ssss';
                    return Tbllmna::create($request->all());
                    // Tbllmna::create([
                    //     ['tbllmnacoda'] => 123,
                    //     ['tbllmnanomb'] => $request->tbllmnanomb,
                    //     ['tbllmnadesc'] => $request->tbllmnadesc,
                    //     ['tbllmnauuid'] => Str::random(12),
                    //     ['tbllmnaimgn'] => 'adjuntos/',
                    //     ['tbllmnafech'] => date('Y-m-d'),
                    //     //['tbllmnatipo'] => $key
                    //     ['tblctgacdgo'] => $request->tblctgacdgo,
                    //     ['tbllmnatags'] => $request->tbllmnatags
                    // ]);
                }
                // return 1;
            } 
        }catch(\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 412); 
        }  
        // $request['tbllmnauuid'] = Str::random(12);
        // $request['tbllmnafech'] = date('Y-m-d');
        // return Tbllmna::create($request->all());
    }

    public function show(Request $request,$id)
    {
        return datatables()->of(Tbllmna::with('categoria')->get())->make(true);
    }

    public function edit($id)
    {
        //
    }

    public function update(TbllmnaRequest $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
