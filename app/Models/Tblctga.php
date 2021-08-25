<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tblctga extends Model
{
    use SoftDeletes;

    protected $table = 'tblctga';
    protected $primaryKey='tblctgacdgo';

    protected $fillable = [
        'tblctgadesc'
    ];
}
