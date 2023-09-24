<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'user_positions';
    protected $guarded = 'id';

    public function user_complements() {
        // return $this->hasMany(UserComplement::class, 'user_position_id');
        return $this->belongsTo(UserComplement::class, 'user_complements', 'user_position_id');
    }
}
