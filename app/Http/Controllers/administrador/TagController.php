<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbltags;
use App\Http\Requests\TbltagsRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TagController extends Controller
{

    public function index()
    {
        return view('administrador.tag.index');
    }

    public function create()
    {
        //
    }

    public function store(TbltagsRequest $request)
    {
        if(!$request->ajax()) return redirect('/');
        unset($request['_token']);
        return Tbltags::updateOrCreate( ['tbltagscdgo' => $request->tbltagscdgo], $request->all());
    }

    public function show(Request $request,$id)
    {
        return datatables()->of(Tbltags::get())->addColumn('action', function ($c) {
            return "<button onClick='traer_tag(".$c.")' class='btn btn-outline-warning btn-sm btn-rounded py-1 my-0 btnExtraer'><i class='fa fa-edit fa-2x'></i></button>";
        })->make(true);
    }

    public function edit($id)
    {
        //
    }

    public function update(TbltagsRequest $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
