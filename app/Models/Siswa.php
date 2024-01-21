<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'siswa';

    protected $fillable = [
        'nama',
        'kelas',
        'mapel',
        'matematika',
        'bahasainggris',
        'uts',
        'uas',
        'latihan1',
        'latihan2',
        'latihan3',
        'latihan4',
        'uh1',
        'uh2'
    ];
}
