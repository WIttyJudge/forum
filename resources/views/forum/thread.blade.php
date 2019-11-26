@extends('layouts.app')

@section('title', "Forum | {$simpleThread->slug}")

@section('content')
    <div class="container">
        <h1>{{$simpleThread -> title}}</h1>
    </div>
@endsection