<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'district';

    protected $fillable = [
        'id','code','khmer','english','krong','srok','khan','commune','sangkat','village','reference','longitudes','latitudes','east_en','east_kh',
        'west_en','west_kh','south_en','south_kh','north_en','north_kh'
    ];
}
