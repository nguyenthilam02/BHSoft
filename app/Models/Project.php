<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'execution_time',
        'status',
        'description',
    ];

    public function numberOfIssues(){
        return $this->hasMany(Issue::class,'project_id','id');
    }

    public function numberOfReport(){
        return $this->hasMany(Report::class,'project_id','id');
    }
}
