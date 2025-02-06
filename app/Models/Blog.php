<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Tetap menggunakan 'id'
    public $incrementing = false; // Matikan auto-increment
    protected $keyType = 'string'; // UUID adalah string

    protected $guarded = [];
}
