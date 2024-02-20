<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dashboard extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'image',
        'title',
        'price',
        'details',
        'format',
        'language_id',
        'catigory_id',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }


}
