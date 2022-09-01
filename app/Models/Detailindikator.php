<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailindikator extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function refjudulindikator()
    {
        return $this->belongsTo(refjuduldetailindikator::class);
    }
    public function refindikator()
    {
        return $this->belongsTo(refindikator::class);
    }
}
