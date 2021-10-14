<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tblctga;

class Tbllmct extends Model
{
    protected $table = 'tbllmct';

    public function categoria()
    {
        return $this->hasOne(Tblctga::class,'tblctgacdgo','tblctgacdgo');
    }
}
