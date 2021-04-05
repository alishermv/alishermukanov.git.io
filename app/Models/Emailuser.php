<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emailuser extends Model
{
    use HasFactory;
    protected $table = 'emailuser';
    protected $fillable = ['name', 'surname', 'email', 'image'];
}
