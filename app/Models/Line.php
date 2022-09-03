<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $connection = 'ridergarage';
    protected $primaryKey = 'idline';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idbrand',
        'label',
        'image_small',
        'code_ravenol',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'idbrand', 'idbrand');
    }

    public function motorcycles()
    {
        return $this->hasMany(Motorcycle::class,'idline','idline');
    }
}
