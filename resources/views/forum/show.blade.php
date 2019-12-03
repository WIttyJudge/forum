@extends('layouts.app')

@section('title', "{$simpleThread->slug} | Forum")

@section('content')
<div class="container">
    <div class="is-6">

        {{-- <div class="columns">
            <div class="column is-narrow">
                <div class="box" style="width: 200px;">
                    <p class="title is-5">Narrow column</p>
                    <p class="subtitle">This column is only 200px wide.</p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <p class="title is-5">Flexible column</p>
                    <p class="subtitle">This column will take up the remaining space available.</p>
                </div>
            </div>
        </div> --}}

        <div class="columns" style="width: 300px;">
            <h1 class="column title is-size-5">{{$simpleThread->title}}</h1>
            <h1 class="column title is-size-5">{{$simpleThread->title}}</h1>
        </div>

        <div class="content">{{ $simpleThread->text }}</div>
        <h1 class="data">{{ Carbon\Carbon::parse($simpleThread->created_at)->diffForHumans() }} </h1>
        <h1 class="data">{{ $simpleThread->user->name }}</h1>
    </div>
</div>
@endsection
