<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;

    protected $fillable=[
        'project_title',
        'service_details',
        'upload'
    ];
}
