@extends('layouts.app')

@section('title', 'Forum')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column box is-10">

            @forelse($threads as $thread)
            <div class="field">
                <h5 class="title is-5">
                    <a class="has-text-info" href="{{route('forum.show', $thread->slug)}}">{{$thread->title}}</a>
                </h5>
                <p class="subtitle has-text-grey is-6">{{ substr($thread->text, 0, 110) }}..</p>

                <div class="media">
                    <div class="media-left">
                        <figure class="image is-32x32">
                            <img class="is-rounded" src="https://bulma.io/images/placeholders/96x96.png"
                                alt="Placeholder image">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                            <p class="  title is-7 has-text-gray-dark">{{ $thread->user->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            @empty
            <p>There are no posts</p>

            @endforelse

            {{-- <nav class="pagination is-centered" role="navigation" aria-label="pagination">
                    <a class="pagination-previous">Previous</a>
                    <a class="pagination-next">Next page</a>
                    <ul class="pagination-list">
                        @if ($threads->total() > $threads->count())
                            <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
                        @endif
                    </ul>
                </nav> --}}
        </div>

        <div class="column is-2">
            <a href="{{route('forum.create')}}" class="button has-background-info
                has-text-white-bis">Create Thread</a>
        </div>
    </div>
</div>
@endsection
