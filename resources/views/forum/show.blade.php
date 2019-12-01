@extends('layouts.app')

@section('title', "{$simpleThread->slug} | Forum")

@section('content')
<div class="container">
    <div class="is-6">
        <h1 class="title is-5">{{$simpleThread->title}}</h1>
        <div class="content">{{ $simpleThread->text }}</div>
        <h1 class="data">{{ $simpleThread->created_at }}</h1>
        <h1 class="data">{{ $simpleThread->user->name }}</h1>
    </div>
</div>
@endsection
