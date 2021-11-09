@extends('auth.style')
<style type="text/css">
	.mb-1{
		margin-bottom: 30px;
	}
</style>

@section('content')
			<form method="POST" action="{{ route('login') }}">
				@csrf

			<h4 class="mb-1">Selamat Datang</h4>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
						<input id="username" type="username" class="form-control input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
						
						@error('username')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        	<span class="invalid-feedback" role="alert">
                            	<strong>{{ $message }}</strong>
                        	</span>
                        @enderror
            	   </div>
            	</div>
				
            	{{-- <a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login"> --}}
				<button type="submit" class="btn btn-primary">
					{{ __('Login') }}
				</button>

				@if (Route::has('password.request'))
					<a href="{{ route('password.request') }}">
						Forgot Password?
					</a>
				@endif

				{{-- <hr style="margin-top: 20px; margin-bottom: 20px;"> --}}

				{{-- <button type="button" class="btn">
					<a id="link" href="{{ route('register') }}">
						{{ __('Register') }}
					</a>
				</button> --}}
            </form>
@endsection