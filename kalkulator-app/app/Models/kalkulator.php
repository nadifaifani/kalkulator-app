<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kalkulator extends Model
{
    use HasFactory;

    protected $table = 'kalkulators';

    protected $primaryKey = 'id_kalkulator';

    public $timestamps = true;

    protected $fillable = [
        'input_a',
        'operasi',
        'input_b',
        'hasil',
    ];
    
}

