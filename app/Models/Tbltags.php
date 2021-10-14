<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Tbltags extends Model
{
    use SoftDeletes;

    protected $table = 'tbltags';
    protected $primaryKey='tbltagscdgo';

    protected $fillable = [
        'tbltagsdesc'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y'); 
    }

    public function getTbltagsdescAttribute($value)
    {
        return strtoupper($value);
    }
}
