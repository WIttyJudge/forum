<?php
namespace App\Http\Controllers\Forum;

use Str;
use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Requests\Forum\ThreadStoreRequest;
use Illuminate\Support\Facades\Session;

class ForumController extends BaseController
{
    /**
     * Display a list of a threads.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::latest()->with('user')->get();

        if(request('search') && request('search') != ''){
            $threads = Thread::latest()->with('user')->where('title', 'like','%'.request('search')."%")->get();
            return view('forum.index', compact('threads'));
        }

        return view('forum.index', compact('threads'));
    }

    /**
     * Show the form to create a new thread.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Stor a newly thread in a storage.
     *
     * @param \App\Http\Requests\Forum\ThreadStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThreadStoreRequest $request)
    {
        $validation = $request->validated();
        // Thread::create($validation);
        Thread::create([
            'slug' => Str::slug(request('title')),
            'title' => request('title'),
            'text' => request('text'),
            'user_id' => auth()->id()
        ]);

        return redirect('/forum');
    }

    /**
     * Dispaly the specified thread.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $simpleThread = Thread::where('slug', $slug)->firstOrFail();
        // $carbon = Carbon::parse($simpleThread->created_at)->formatLocalized('Y-m-d');
        return view('forum.show', compact('simpleThread'));
    }

    /**
     * Show the form for edition the the specified thread.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified thread in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified thread from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
