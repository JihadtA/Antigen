@extends('auth.style')

@section('content')
			<form method="POST" action="{{ route('register') }}">
				@csrf

				<h3>REGISTER</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
						<input id="name" type="text" class="form-control input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i"> 
           		    	<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>E-mail</h5>
           		    	<input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        	<span class="invalid-feedback" role="alert">
                            	<strong>{{ $message }}</strong>
                        	</span>
                        @enderror
            	   </div>
            	</div>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        	<span class="invalid-feedback" role="alert">
                            	<strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Ulangi Password</h5>
                        <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            	<input type="submit" class="btn" value="Register">

				<hr style="margin-top: 20px; margin-bottom: 20px;">

				<button type="button" class="btn">
					<a id="link" href="{{ route('login') }}">
						{{ __('Login') }}
					</a>
				</button>
            </form>
@endsection