<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyContact extends Model
{
    use HasFactory;

    protected $table = 'family_contacts';
    protected $guarded = 'id';

    public function users() {
        return $this->belongsTo(FamilyContact::class, 'family_contacts', 'user_id');
    }
}
