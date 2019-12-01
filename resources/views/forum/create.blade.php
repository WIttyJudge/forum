@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
<div class="container">
    <form method="POST" action="{{route('forum.store')}}">
        @csrf

        <div class="field is-center">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" name="title" type="text" placeholder="Text input">
            </div>
            <p class="help">Maximum 60 charecters.</p>

            @if ($errors->has('title'))
                <span>{{ $errors->first('title') }}</span>
            @endif

        </div>

        <div class="field">
            <label class="label">Message</label>
            <div class="control">
                <textarea class="textarea" name="text" placeholder="Textarea"></textarea>
            </div>

            @if ($errors->has('text'))
                <span>{{ $errors->first('text') }}</span>
            @endif

        </div>

        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button has-background-info has-text-white" value="Send">
            </div>
            <div class="control">
                <a href="{{route('forum.index')}}" class="button is-link is-light">Cancel</a>
            </div>
        </div>
    </form>

</div>

@endsection
