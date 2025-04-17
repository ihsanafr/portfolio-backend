<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'type', 'overview', 
        'goals_motivation', 'project_link'
    ];

    public function techstacks()
    {
        return $this->belongsToMany(Techstack::class);
    }
}