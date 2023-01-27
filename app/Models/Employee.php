<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'hp', 'city', 'province'];

    public function childrens()
    {
        return $this->hasMany(Children::class, 'employee_id', 'id');
    }
}
