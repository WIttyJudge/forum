@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label class="label">{{ __('Register') }}</label>

        <div class="field">
            <label for="name">{{ __('Name') }}</label>

            <div class="control">
                <input class="input" id="name" name="name" type="text"
                    placeholder="Alex Smith" value="{{ old('name') }}" required>
            </div>

            @error('name')
                <p class="has-text-danger">{{ $message }}</p>
            @enderror

        </div>

        <div class="field">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <div class="control">
                <input class="input" id="name" name="email" type="email" placeholder="e.g. alexsmith@gmail.com"
                    value="{{ old('email') }}" required>
            </div>

            @error('email')
                <p class="has-text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="password">{{ __('Password') }}</label>
            <div class="control">
                <input class="input" id="name" name="password" type="password" required>
            </div>

            @error('password')
                <p class="has-text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <div class="control">
                <input type="password" class="input" id="password-confirm" name="password_confirmation" required>
            </div>

        </div>

        <input class="button has-background-info has-text-white" type="submit" value="Send">
    </form>
</div>
@endsection
