@extends('layouts.app')

@section('content')
<style>
.content{
    background-color:white;
  color:#FBB90E;

  outline: 0 0 0 0  !important;
box-shadow: px 2px 2px 2px;


}
input,h2,label{
    font-family: 'cursive';
    font-weight: bold;
    letter-spacing:1px;
}




</style>

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-md-9 col-lg-6 col-xl-5 ">
          <img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-protect-yourself-from-virus-isometric-banner-YBRBA7Y.svg"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 border border-warning rounded-3 border-start-0  content" >
            <form method="POST" action="{{ route('login') }}">
                @csrf



            <!-- Email input -->
            <div class="form-outline mb-4 border-primary">
                <h2 class="text text-center text text-warning p-5">Login </h2>

                <label class="form-label text text-warning" for="form3Example3">Nationality ID</label>

                <input id="national_num" type="national_num" class="form-control p-2 @error('national_num') is-invalid @enderror" name="national_num" value="{{ old('national_num') }}" required autocomplete="national_num" autofocus>

                @error('national_num')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <label class="form-label p-2 text text-warning" for="form3Example4">Password</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
              </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4 p-4">
                    <button type="submit" class="btn btn-outline-warning">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-outline-dark" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
      </div>
    </div>



</section>










































@endsection
