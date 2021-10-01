<?php

namespace App\Http\Controllers\principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactanosController extends Controller
{

    public function index()
    {
        return view('principal.contactanos');
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
        //
    }

    public function update(Request $request, $are_id)
    {
        
    }

    public function destroy($id)
    {
        //
    }
}
