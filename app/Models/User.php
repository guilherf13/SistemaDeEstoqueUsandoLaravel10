<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'password', 'cpf', 'email', 'phone', 'birthday', 'address'];

    public function shoppings()
    {
        return $this->hasMany(Shopping::class);
    }
}
