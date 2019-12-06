@extends('layouts.app')

@section('title', "{$simpleThread->slug} | Forum")

@section('content')
<div class="container">

    <div class="media" style="margin-bottom:25px;">
        <div class="media-left">
            <figure class="image is-32x32">
                <img class="is-rounded" src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
            </figure>
        </div>

        <div class="media-content">
            <div class="content">
                <p>
                    <strong class="title is-size-7 has-text-gray-dark"
                        style="padding-right:10px;">{{ $simpleThread->user->name }}</strong>
                    <small
                        class="title is-size-7 has-text-grey-darker">{{ $simpleThread->convertForHumans($simpleThread->created_at) }}</small>
                </p>
            </div>
        </div>
    </div>
    <div>
        <p>{{ $simpleThread->text }}</p>
    </div>

    <hr>
    <div class="comments" style="margin-bottom: 30px;">
        <article>
            <ul>
                @foreach ($simpleThread->comments as $comment)
                <li>
                    <b>{{$comment->created_at->diffForHumans() }}</b><br>
                    {{ $comment->body }}
                </li>
             @endforeach
        </ul>
        </article>
    </div>


    <div>
        <form action="{{ route('thread.comments', $simpleThread->id)}}" method="POST">
            @csrf
            <textarea class="textarea" name="body" placeholder="Your Comments"></textarea>
            <input type="submit" class="button" value="Add Comment">
        </form>
    </div>
</div>
@endsection
