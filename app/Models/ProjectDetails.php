<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    use HasFactory;

    protected $fillable=[
        'project_id',
        'project_image',
        'image_path',
        'short_description',
        'description',
    ];
}
