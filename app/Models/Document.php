<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'title',
        'description',
        'file_path',
        'created_date',
        'project_id',
        'user_id',
    ];
}
