<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesticideReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'jam',
        'nama_pestisida',
        'jenis_pestisida',
        'dosis',
        'catatan',
        'document_path',
        'user_id',
        'status_verifikasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
