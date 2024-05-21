<?php

namespace App\Models\Admin;
use App\Models\BaseModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg extends BaseModel
{use HasFactory;
    protected $fillable=[
        'username',
        'address',
        'contact_number',
        'email',
        'password',
        'status',
    ];
}
