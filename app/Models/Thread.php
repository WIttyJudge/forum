<?php

namespace App\Models;

use App\Comments;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'text'
    ];

    protected $dates = [
        'created_at',
        'updates_at'
    ];

    /**
     * Create a new comment on certain thread.
     *
     * @param mixed $body
     */
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));

        // Comments::create([
        //     'body' => $body,
        //     'thread_id' => $this->id
        // ]);
    }

    /**
     * Takes the date from the table and converts it for humans.
     *
     * @param mixed $data
     * @return string
     */
    public static function convertForHumans($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
