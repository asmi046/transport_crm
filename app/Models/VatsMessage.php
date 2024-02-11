<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatsMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'method',
        'cmd',
        'phone',
        'src_content',
    ];
}
