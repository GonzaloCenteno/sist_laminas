<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tblplan;
use Carbon\Carbon;
use App\User;

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

    public function usuario()
    {
        return $this->hasOne(User::class,'tblusrocdgo','tblusrocdgo');
    }

    public function getTblusplfechAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y'); 
    }
}
