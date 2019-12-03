@extends('layouts.app')

@section('title', "{$simpleThread->slug} | Forum")

@section('content')
<div class="container">

    <h1>{{ $simpleThread->user->name }}</h1>
    <div class="content">{{ $simpleThread->text }}</div>
    <h1>{{ Carbon\Carbon::parse($simpleThread->created_at)->diffForHumans() }} </h1>

    <div class="columns" style="width: 300px;">
        <h1 class="column title is-size-5">{{$simpleThread->title}}</h1>
    </div>



</div>
@endsection
