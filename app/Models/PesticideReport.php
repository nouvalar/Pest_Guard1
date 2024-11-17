<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesticideReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'tanggal',
        'jam',
        'nama_pestisida',
        'jenis_pestisida',
        'dosis',
        'catatan',
        'document_path',
        'status_verifikasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
