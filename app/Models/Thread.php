<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'slug', 'title', 'text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
