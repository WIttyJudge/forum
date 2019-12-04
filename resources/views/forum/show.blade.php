@extends('layouts.app')

@section('title', "{$simpleThread->slug} | Forum")

@section('content')
<div class="container">

    <div class="media">
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

        <div>
            <p>{{ $simpleThread->text }}</p>
        </div>
    </div>

    {{--
    <h1>{{ $simpleThread->user->name }}</h1>
    <div class="content">{{ $simpleThread->text }}</div>
    <h1>{{ Carbon\Carbon::parse($simpleThread->created_at)->diffForHumans() }} </h1>

    <div class="columns" style="width: 300px;">
        <h1 class="column title is-size-5">{{$simpleThread->title}}</h1>
    </div> --}}

</div>
@endsection
