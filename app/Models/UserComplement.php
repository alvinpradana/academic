<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComplement extends Model
{
    use HasFactory;

    protected $table = 'user_complements';
    protected $guarded = 'id';

    public function user() {
        return $this->belongsTo(User::class, 'user_complements', 'user_id');
    }
}
