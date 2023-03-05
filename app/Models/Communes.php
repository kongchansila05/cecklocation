<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    use HasFactory;
    protected $table = 'communes';

    protected $fillable = [
        'id', 'district_code','code','khmer','english','village','type','reference','official_note','note_by_checker',
    ];
}
