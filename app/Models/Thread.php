<?php

namespace App\Models;

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
}
