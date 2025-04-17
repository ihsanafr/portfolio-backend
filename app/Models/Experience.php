<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    // app/Models/Experience.php
protected $fillable = [
    'name',
    'image',
    'date', // hanya kolom date string
    'overview',
    'goals_motivation'
];
}