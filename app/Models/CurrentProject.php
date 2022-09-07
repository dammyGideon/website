<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentProject extends Model
{
    use HasFactory;

    protected $fillable=[
        'project_image',
        'short_description',
        'description',
    ];
}
