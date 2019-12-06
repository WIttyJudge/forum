<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Models\Thread;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    /**
     *Handle comments request.
     *
     * @param \App\Models\Thread $thread
     */
    public function store(Thread $thread)
    {
        $thread->addComment(request('body'));

        return redirect()->route('forum.show', $thread->slug);
    }
}
