<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'personal_access_tokens';
}
