<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;

    protected $table = 'sarans';

    protected $primaryKey = 'id_saran';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'saran',
        'waktu',
    ];

    protected $casts = [
        'waktu' => 'datetime',
    ];
}
