<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poins extends Model
{
    use HasFactory;

    protected $table = 'poins';
    protected $guarded = [
        'id'
    ];

    public function poin()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
