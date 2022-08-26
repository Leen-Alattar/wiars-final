<style>
    .content {
        background-color: white;
        color: #FBB90E;

        outline: 0 0 0 0 !important;
        box-shadow: px 2px 2px 2px;


    }

    input,
    h2,
    label {
        font-family: 'cursive';
        font-weight: bold;
        letter-spacing: 1px;
    }

    img {
        width: 100%;
    }

    .login {
        height: 1000px;
        width: 100%;
        background: radial-gradient(#f9b800, #FF580E);
        position: relative;
    }

    .login_box {
        width: 1306px;
        height: 600px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 10px;
        box-shadow: 1px 4px 22px -8px #0004;
        display: flex;
        overflow: hidden;
    }

    .login_box .left {
        width: 41%;
        height: 100%;
        padding: 25px 25px;

    }

    .login_box .right {
        width: 59%;
        height: 100%
    }

    .left .top_link a {
        color: #452A5A;
        font-weight: 400;
    }

    .left .top_link {
        height: 20px
    }

    .left .contact {
        display: flex;
        align-items: center;
        justify-content: center;
        align-self: center;
        height: 100%;
        width: 88%;
        margin: auto;
    }

    .left h3 {
        text-align: center;
        margin-bottom: 40px;
    }

    .left input {
        border: none;
        width: 80%;
        margin: 15px 0px;
        border-bottom: 1px solid #4f30677d;
        padding: 7px 9px;
        width:140%;
        overflow: hidden;
        background: transparent;
        font-weight: 600;
        font-size: 14px;
    }

    .left {
        background: linear-gradient(-45deg, ##f1f1f1, #fff);
    }

    .submit {
        border: none;
        padding: 15px 70px;
        border-radius: 8px;
        display: block;
        margin: auto;
        margin-top: 80px;
        background: #FF580E;
        color: #fff;
        font-weight: bold;
        -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    }



    .right {
        background: linear-gradient(212.38deg, rgba(229, 219, 223, 0.169) 0%, rgba(242, 237, 243, 0) 100%), url(https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-protect-yourself-from-virus-isometric-banner-YBRBA7Y.svg);
        color: #fff;
        position: relative;
    }

    .right .right-text {
        height: 100%;
        position: relative;
        transform: translate(0%, 45%);
    }

    .right-text h2 {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 80px;
        font-weight: 500;
        color: #ec0606;
    }
    
    .right-text h5 {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 19px;
        font-weight: 400;
    }

    .right .right-inductor {
        position: absolute;
        width: 70px;
        height: 7px;
        background: #fff0;
        left: 50%;
        bottom: 70px;
        transform: translate(-50%, 0%);
    }

    .top_link img {
        width: 28px;
        padding-right: 7px;
        margin-top: -3px;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="http://127.0.0.1:8000/"><img
                            src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-protect-yourself-from-virus-isometric-banner-YBRBA7Y.svg"
                            alt="">Return home</a></div>
                <div class="contact">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3>Login Form</h3>
                        <input id="national_num" type="national_num"
                            class="form-control p-2 @error('national_num') is-invalid @enderror" name="national_num"
                            value="{{ old('national_num') }}" required autocomplete="national_num" autofocus
                            type="text" placeholder="Nationality ID">
                        @error('national_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" type="text" placeholder="PASSWORD">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label> --}}
                            <button class="submit">{{ __('Login') }}</button>
                      
                      
                        
                                {{-- @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                      
                      
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Wiras</h2>
                    <h5 style = "color: #ec0606;">The best way to track Foundations    </h5>
                </div>
             
            </div>
        </div>
    </section>
</body>

</html>
