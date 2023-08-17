@extends('layouts.app')
@section('content')
<div class="sidenav video-wrapper">
  <video playsinline autoplay muted loop poster="cake.jpg">
       <source src="{{ URL::to('/') }}/bgGreen.mp4" type="video/mp4" />
   </video>
         <div class="login-main-text">
         <a href="/"><img alt="" src="{{ URL::to('/') }}/Logo_vert.png" width="300px"></a>
         <hr><br>
            <h2>Sign in and join the fun!</h2>
            <p>No account? you can <a href="register">Create one!</a></p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-12 col-sm-12">
            <div class="login-form">

            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                        <h1 class="col-md-4 text-md-right"></h1>
                        <div class="col-md-6">
                        <h1 class="">Login</h1>No account? <a href="register">Create one!</a>
                            <hr></div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-large main-bg">
                                    {{ __('Login') }}
                                </button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-dark" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>
         </div>
      </div>
@endsection
<style>


video {
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
.video-wrapper {
  position: relative;
  overflow: hidden;

  display: flex;

}

/* Just styling the content of the div, the *magic* in the previous rules */


.main-head{
  z-index: 1;
    height: 150px;
    background: #FFF;

}

.sidenav {
    height: 100%;
    background-color: #8BBF9C;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 30%;
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 20%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    z-index: 1;
    margin-top: 8%;
    padding: 60px;
    color: #000;
}

.login-main-text h2{
    font-weight: 300;
}


    </style>
