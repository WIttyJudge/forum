<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Thread;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class SearchThreadController extends Controller
{
    public function search(Request $request)
    {
        dd(__METHOD__);
        $search = $request->search;
        $post = Thread::where('title', 'like', '%'.$search.'%');
        return view('forum.search', compact('post'));
    }
}
