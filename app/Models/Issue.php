<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'title',
        'classify',
        'priority',
        'start_time',
        'end_time',
        'status',
        'description',
        'file_path',
        'created_date',
        'project_id',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
