<?php

namespace App\Models\user_detail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'phone', 'email', 'address'];
}
