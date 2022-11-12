<?php

namespace App\Models;

use App\Models\User;
use App\Models\Agama;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agama_id',
        'alamat',
        'kota_lahir',
        'tanggal_lahir',
        'umur'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }
}
