<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AboutUs extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'image',
        'status',
    ];
}
