<?php

namespace App\Models;

use App\Models\refsmf;
use App\Models\refruangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function refsmf()
    {
        return $this->belongsTo(refsmf::class);
    }
    public function refruangan()
    {
        return $this->belongsTo(refruangan::class);
    }
}
