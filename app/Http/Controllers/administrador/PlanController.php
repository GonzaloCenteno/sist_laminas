<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tblplan;
use App\Http\Requests\TblplanRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlanController extends Controller
{

    public function index()
    {
        return view('administrador.plan.index');
    }

    public function create()
    {
        //
    }

    public function store(TblplanRequest $request)
    {
        if(!$request->ajax()) return redirect('/');
        return Tblplan::create($request->all());
    }

    public function show(Request $request,$id)
    {
        if(!$request->ajax()) return redirect('/');
        return datatables()->of(Tblplan::get())->make(true);
    }

    public function edit($id)
    {
        //
    }

    public function update(TblplanRequest $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
