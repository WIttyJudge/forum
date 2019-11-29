@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <label class="label">{{ __('Login') }}</label>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
            <label for="email">{{ __('E-Mail Address') }}</label>

            <div class="control">
                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required>


                @error('email')
                <p class="has-text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label for="password">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="input" name="password" required>

                @error('password')
                <p class="has-text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input class="checkbox" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>


        <div class="">
            <input type="submit" class="button has-background-info has-text-white" value="{{ __('Login') }}">

            @if (Route::has('password.request'))
                <a class="has-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

    </form>
</div>
@endsection
