<?php

namespace App;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $fillable = [
        'thread_id',
        'body'
    ];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
