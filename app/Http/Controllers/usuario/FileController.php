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
        $categorias = Tblctga::orderBy('tblctgadesc','asc')->get();

        if ($request->ajax()) {
            return view('usuario.file.pagination', compact('laminas','categorias'))->render(); 
        }

        return view('usuario.file.index',compact('laminas','categorias'));
    }

    private function obtener_laminas_por_plan($usuario)
    {
        try{
            throw_unless(Tbluspl::where([['tblusrocdgo',$usuario],['tblusplflag','A']])->first(), new \Exception('flta validar'));
            return Tbllmna::where('tbllmnatipo','0')->paginate(2);
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
        $img = $request->canvasimg;
        //return redirect()->route('lamina.index');
        return view('usuario.file.canvas', compact('img'))->render(); 
    }

    public function show(Request $request, $tbllmnauuid)
    {
        if($request->tipo == 1):
            $lamina = Tbllmna::where('tbllmnauuid',$tbllmnauuid)->first();
            $view = \View::make('reportes.lamina_original',compact('lamina'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadHTML($view)->setPaper('a4','landscape');
            return $pdf->download($lamina->tbllmnanomb.".pdf");
        elseif($request->tipo == 3):
            $lamina = Tbllmna::where('tbllmnauuid',$tbllmnauuid)->first();
            return view('usuario.file.view', compact('lamina'));
        elseif($request->tipo == 4):
            $laminas = Tbllmna::where('tblctgacdgo',$request->valor)->with('categoria')->paginate(2);
            $categorias = Tblctga::get();
            return view('usuario.file.pagination', compact('laminas','categorias'))->render(); 
        else:
            $nombre = preg_replace('/\s+/', ' ', strtoupper($request['descripcion']));

            $consulta="";$iniciador=0;
            $descripcion = explode(" ", $nombre);
            foreach($descripcion as $desc)
            {
                if($iniciador==1)
                {
                    $consulta.=" AND ";
                }
                if($desc!="")
                {
                    $consulta.="concat_ws(' ',UPPER(tbllmnanomb),UPPER(tbllmnadesc),UPPER(tbllmnatags),tbllmnacoda) like '%$desc%'";
                }
                if($iniciador==0)
                {
                    $iniciador=1;
                }
            }

            $laminas = Tbllmna::where('tbllmnatipo','0')->whereRaw($consulta)->paginate(2);        
            $categorias = Tblctga::orderBy('tblctgadesc','asc')->get();
            return view('usuario.file.pagination', compact('laminas','categorias'))->render(); 
        endif;
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
