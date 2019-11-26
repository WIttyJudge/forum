@extends('layouts.app')

@section('title', 'Forum')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column box is-10">

                @forelse($threads as $thread)
                    <div class="field">
                        <h5 class="title is-5">
                            <a class="has-text-info" href="{{route('forum.show', $thread->slug)
                            }}">{{$thread->title}}</a>
                        </h5>
                        <p class="subtitle has-text-grey is-6">{{substr($thread->text, 0, 80) }}..</p>

                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png"
                                         alt="Placeholder image">
                                </figure>
                            </div>

                            <div class="media-content">
                                <p class="title is-6">John Smith</p>
                            </div>
                        </div>
                    </div>
                    <hr>

                @empty
                    <p>Empty</p>

                @endforelse
            </div>

            <div class="column is-2">
                <a href="{{route('forum.create')}}" class="button has-background-info
                has-text-white-bis">Create Thread</a>
            </div>
        </div>
    </div>
@endsection
