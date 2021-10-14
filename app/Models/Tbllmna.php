<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tblctga;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Tbllmna extends Model
{
    use SoftDeletes;

    protected $table = 'tbllmna';
    protected $primaryKey='tbllmnacdgo';

    protected $fillable = [
        'tbllmnacoda','tbllmnanomb','tbllmnadesc','tbllmnauuid','tbllmnaimgo','tbllmnaimgf','tbllmnapdfl','tbllmnafech','tbllmnatipo','tbllmnatags'
    ];

    // public function categoria()
    // {
    //     return $this->hasOne(Tblctga::class,'tblctgacdgo','tblctgacdgo');
    // }

    public function categorias()
    {
        return $this->belongsToMany(Tblctga::class,'tbllmct','tbllmnacdgo', 'tblctgacdgo');
    }

    public function setTbllmnaimgoAttribute($imagen){
        if($imagen !== null && $imagen !== '')
            $bandera = Str::random(12);
            $filename = $imagen->getClientOriginalName();
            $fileserver = $bandera.'_'.$filename;
            $imagen->move(public_path('adjuntos/'), htmlentities($fileserver));
            $this->attributes['tbllmnaimgo'] = 'adjuntos/'.$fileserver;
    }

    public function setTbllmnaimgfAttribute($imagen){
        if($imagen !== null && $imagen !== '')
            $bandera = Str::random(12);
            $filename = $imagen->getClientOriginalName();
            $fileserver = $bandera.'_'.$filename;
            $imagen->move(public_path('adjuntos/'), htmlentities($fileserver));
            $this->attributes['tbllmnaimgf'] = 'adjuntos/'.$fileserver;
    }

    public function setTbllmnapdflAttribute($imagen){
        if($imagen !== null && $imagen !== '')
            $bandera = Str::random(12);
            $filename = $imagen->getClientOriginalName();
            $fileserver = $bandera.'_'.$filename;
            $imagen->move(public_path('adjuntos/'), htmlentities($fileserver));
            $this->attributes['tbllmnapdfl'] = 'adjuntos/'.$fileserver;
    }

    public function getTbllmnatipoAttribute($value)
    {
        switch ($value) {
          case 1: return 'FREE';break;
          case 0: return 'ORIGINAL';break;
        }
    }

    public function getTbllmnafechAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y'); 
    }
}
