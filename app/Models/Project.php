<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'name', 'image', 'type', 'overview', 
        'goals_motivation', 'project_link', 'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });

        static::updating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

    // Relasi ke techstacks jika ada
    public function techstacks()
    {
        return $this->belongsToMany(Techstack::class);
    }
}