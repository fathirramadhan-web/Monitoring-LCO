<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lcolog extends Model
{
    // ✅ Spesifikasikan nama tabel karena bukan konvensi default Laravel
    protected $table = 'lcologs';

    // ✅ Kolom-kolom yang boleh diisi secara massal
    protected $fillable = [
        'date',
        'done',
        'target',
        'jam' 
    ];

    
    protected $casts = [
        'date' => 'date',
    ];
}
