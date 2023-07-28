<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'imagetable_id',
        'imagetable_id',
    ];
    public function imageable()
    {
        return $this->morphTo();
    }

}
