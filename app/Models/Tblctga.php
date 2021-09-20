<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Tblctga extends Model
{
    use SoftDeletes;

    protected $table = 'tblctga';
    protected $primaryKey='tblctgacdgo';

    protected $fillable = [
        'tblctgadesc'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y'); 
    }

    public function getTblctgadescAttribute($value)
    {
        return strtoupper($value);
    }
}
