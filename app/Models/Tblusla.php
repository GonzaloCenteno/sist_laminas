<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tbllmna;

class Tblusla extends Model
{
    protected $table = 'tblusla';
    // protected $primaryKey='tblctgacdgo';

    // protected $fillable = [
    //     'tblctgadesc'
    // ];

    public function lamina()
    {
        return $this->hasOne(Tbllmna::class,'tbllmnacdgo','tbllmnacdgo');
    }
}
