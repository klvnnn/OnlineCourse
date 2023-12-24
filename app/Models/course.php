<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $fillable = [
        'judul',
        'deskripsi',
        'durasi',
    ];
    public function learning()
    {
        return $this->belongsTo(learning::class);
    }
}
