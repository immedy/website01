<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menuindikator extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function refindikator()
    {
        return $this->belongsTo(refindikator::class,"refindikator_id","id");
    }
}
