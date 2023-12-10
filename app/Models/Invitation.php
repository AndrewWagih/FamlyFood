<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Invitation::class, 'parent_id');
    }

    public function sub()
    {
        return $this->hasMany(Invitation::class, 'parent_id');
    }
}
