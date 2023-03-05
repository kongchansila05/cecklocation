<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    protected $table = 'village';

    protected $fillable = [
        'id', 'commune_code','code','khmer','english','reference','official_note','note_by_checker',
    ];
}
