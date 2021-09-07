<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tblplan;

class Tbluspl extends Model
{
    protected $table = 'tbluspl';
    // protected $primaryKey='tblctgacdgo';

    // protected $fillable = [
    //     'tblctgadesc'
    // ];

    public function plan()
    {
        return $this->hasOne(Tblplan::class,'tblplancdgo','tblplancdgo');
    }
}
