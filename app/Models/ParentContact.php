<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentContact extends Model
{
    use HasFactory;

    protected $table = 'parent_contacts';
    protected $guarded = 'id';

    public function users() {
        return $this->belongsTo(User::class, 'parent_contacts', 'user_id');
    }
}
