<?php

namespace App\Models\Admin;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goat extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'item_name',
        'rupees',
        'quantity',
        'image',
        'description',
        'status',
    ];

}
