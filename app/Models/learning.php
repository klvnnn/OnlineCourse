<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learning extends Model
{
    use HasFactory;
    protected $table = "learnings";
    protected $fillable = [
        'judul',
        'deskripsi',
        'link',
    ];
    public function course()
    {
        return $this->hasMany(course::class);
    }
}
