<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistre extends Model
{
    use HasFactory;

    protected $fillable = [
        "assurance",
        "police",
        "nom",
        "email",
        "contact1",
        "contact2",
        "lieu",
        "date_sinistre",
        "details",
        "nature",
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
