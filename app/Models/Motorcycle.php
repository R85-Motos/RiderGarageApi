<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    protected $connection = 'ridergarage';
    protected $primaryKey = 'idmodel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idline',
        'label',
        'image_small',
        'code_ravenol',
    ];

    public function line()
    {
        return $this->belongsTo(Line::class, 'idline', 'idline');
    }
}
