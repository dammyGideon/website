<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCollection extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'name',
        'email',
        'phone',
        'list_of_variables',
        'frequency_data',
        'range_of_data',
        'format_preferred',
        'description',
    ];
}
