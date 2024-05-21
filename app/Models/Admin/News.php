<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends BaseModel
{
    use HasFactory;
    protected $fillable=[
         'title',
         'image',
         'excerpt',
         'status',
    ];
}
