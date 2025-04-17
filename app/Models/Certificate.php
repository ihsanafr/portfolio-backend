<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

   // app/Models/Certificate.php
protected $fillable = [
    'name',
    'image',
    'date', // hanya kolom date string
    'organizer',
    'certificate_link'
];
}