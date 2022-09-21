<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topologia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'imagem',
        'observacao',
        'user_id'
    ];
}
