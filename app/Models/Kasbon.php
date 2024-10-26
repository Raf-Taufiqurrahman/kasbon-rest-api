<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasbon extends Model
{
    use HasFactory;
    protected $table = 'kasbon';
    protected $fillable = ['tanggal_diajukan', 'tanggal_disetujui', 'pegawai_id', 'total_kasbon'];

    /**
     * Relasi dengan model Pegawai, berupa pegawai yang mengajukan kasbon.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id');
    }
}
