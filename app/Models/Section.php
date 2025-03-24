<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $filalbel = [
        'calass_id',
        'name',
    ];

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
