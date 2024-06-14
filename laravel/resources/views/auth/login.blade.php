@extends('layouts.auth')

@section('content')
	<a href="{{ route('login') }}" class="logo"><i class="bi bi-robot display-1"></i></a>
	<p class="display-6">
		{{ __('auth.header.please-sign-in') }}
	</p>
	<form method="POST" action="{{ route('login') }}" class="form-service w-50">
        @csrf

		<label for="email" class="form-label mt-4">{{ __('auth.label.email-address') }}</label>
			<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelpBlock">
			@error('email')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
				<div id="emailHelpBlock" class="form-text">{{ __('auth.help.email-address') }}</div>

		<label for="password" class="form-label mt-4">{{ __('auth.label.password') }}</label>
			<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" aria-describedby="passwordHelpBlock">
			@error('password')	
				<div class="invalid-feedback">{{ __('auth.validate.password') }}</div>
			@enderror	
				<div id="passwordHelpBlock" class="form-text">{{ __('auth.help.password') }}</div>

		<button type="submit" class="btn btn-webemo-dark w-100 mt-4 mb-4 rounded-pill">
            {{ __('auth.link.sign-in') }}
        </button>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('auth.link.restore') }}
            </a>
        @endif
        
	</form>
@endsection