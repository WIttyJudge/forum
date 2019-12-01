<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'text', 'slug', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
