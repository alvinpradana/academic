<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpployeeComplement extends Model
{
    use HasFactory;
    protected $table = 'employee_complements';
    protected $guarded = 'id';

    public function users() {
        return $this->belongsTo(User::class, 'employee_complements', 'user_id');
    }
}
