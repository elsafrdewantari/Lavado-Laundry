<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Admin extends Model implements Authenticatable
{
    use AuthenticatableTrait, HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel (yaitu plural dari nama model)
    protected $table = 'admins';  // Ganti dengan nama tabel Anda jika perlu

    // Tentukan kolom yang tidak boleh diisi (mass assignable)
    protected $fillable = [
        'user_name',  // Kolom yang dapat diisi
        'password',   // Kolom yang dapat diisi
    ];

    // Tentukan kolom yang tidak boleh diubah
    protected $guarded = [
        'id_admin',  // Kolom id_admin tidak boleh diubah
    ];

    // Tentukan timestamp untuk created_at dan updated_at
    public $timestamps = true;
}

