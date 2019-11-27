@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('forum.store')}}">
            @csrf

            <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                      <input class="input" name="title" type="text" placeholder="Text input">
                    </div>
                  </div>

                  <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                      <textarea class="textarea" name="text" placeholder="Textarea"></textarea>
                    </div>
                  </div>

                  <div class="field is-grouped">
                    <div class="control">
                      <input type="submit" class="button has-background-info has-text-white">
                    </div>
                    <div class="control">
                      <a href="{{route('forum.index')}}" class="button is-link is-light">Cancel</a>
                    </div>
                  </div>
        </form>
    </div>
@endsection
