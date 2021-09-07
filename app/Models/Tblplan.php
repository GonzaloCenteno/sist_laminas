<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tblplan extends Model
{
    use SoftDeletes;

    protected $table = 'tblplan';
    protected $primaryKey='tblplancdgo';

    protected $fillable = [
        'tblplannomb','tblplandesc','tblplancost','tblplanprdo'
    ];
}
