<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jabatan'];
    public $timestamps = true;

    public function Struktural()
    {
        return $this->hasMany(Struktural::class);
    }
}
