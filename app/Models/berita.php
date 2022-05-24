<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function refruangan()
    {
        return $this->belongsTo(refruangan::class);
    }
    public function refkategori()
    {
        return $this->belongsTo(refkategori::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
