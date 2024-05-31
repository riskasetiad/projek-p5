<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_guru', 'telepon', 'email', 'id_mapel','sampul'];
    public $timestamps = true;

    public function Struktural()
    {
        return $this->hasMany(Struktural::class);
    }
    
    public function Mapel()
    {
        return $this->BelongsTo(Mapel::class, 'id_mapel');
    }
}
