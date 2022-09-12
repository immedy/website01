<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refjuduldetailindikator extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function refindikator()
    {
        return $this->belongsTo(refindikator::class);
    }
}
