<?php

namespace App\Models\Admin;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hen extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'hencategory_id',
        'rupees',
        'quantity',
        'image',
        'description',
        'status',
    ];
    public function hencategory(): BelongsTo
    {
        return $this->belongsTo(Hencategory::class, 'hencategory_id');
    }

}
