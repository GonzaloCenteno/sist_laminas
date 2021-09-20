<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbluspl;
use Carbon\Carbon;

class FacturaController extends Controller
{

    public function index()
    {
        return view('administrador.factura.index');
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
        return datatables()->of(Tbluspl::with('plan','usuario'))
                            ->addColumn('fechvencimiento', function($datos) {
                                return Carbon::parse($datos->tblusplfech)->addMonth($datos->plan->tblplanprdo)->format('d/m/Y');
                            })->rawColumns(['fechvencimiento'])->make(true);
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
