<?php

namespace App\Models;

use App\Models\refjabatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jabatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function refjabatan()
    {
        return $this->belongsTo(refjabatan::class);
    }
}
