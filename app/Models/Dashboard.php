<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'price',
        'details',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

}
