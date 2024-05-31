<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktural extends Model
{
    use HasFactory;
    protected $fillable = ['id_guru', 'id_jabatan','sampul'];
    public $timestamps = true;

    public function Guru()
    {
        return $this->BelongsTo(Guru::class, 'id_guru');
    }

    public function Jabatan()
    {
        return $this->BelongsTo(Jabatan::class, 'id_jabatan');
    }
}
