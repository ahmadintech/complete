<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'image'
       ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%'.$filters['search'].'%')
            ->orWhere('email', 'like', '%'.$filters['search'].'%')
            ->orWhere('phone', 'like', '%'.$filters['search'].'%');
        }
    }
}
