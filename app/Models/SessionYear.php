<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionYear extends Model
{
    use HasFactory;
    protected $fillable = [
        "year",
        "starting_month",
        "ending_month",
        "note",
    ];
}
