@extends('layouts.app')

@section('title', 'Forum')

@section('content')
    <div class="container">
        <div class="column">
            <div class="column box is-9">
                @foreach($threads as $thread)
                    <div class="field">
                        <h5 class="title is-5">{{$thread->title}}
                        </h5>
                        <p class="subtitle is-6">{{substr($thread->text, 0, 80) }}</p>

                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                </figure>
                            </div>

                            <div class="media-content">
                                <p class="title is-6">John Smith</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
