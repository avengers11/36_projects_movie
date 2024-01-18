<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Log In!!</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100vw;
                height: 100vh;
                background-image: url("{{asset("images/icons/".$data["bg"])}}");
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                background-color: #b3b3b3;
                background-blend-mode: multiply;
                overflow:hidden;
                margin:0;
            }
            body .logo {
                position: absolute;
                align-self: flex-start;
                left: 10px;
                color: red;
                font-weight: bold;
                font-family: ui-monospace;
                margin-top: 10px;
            }
            body .logo img {
                height: 75px;
                width: auto;
            }
            body .login {
                display: flex;
                flex-direction: column;
                background: rgba(0, 0, 0, 0.75);
                border-radius: 4px;
                width: 250px;
                height: 360px;
                padding: 25px;
            }
            body .login__title {
                margin-bottom: 20px;
                font-size: 2.2rem;
                font-weight: 600;
                color: #fff;
            }
            body .login__group {
                position: relative;
                z-index: 10;
                display: flex;
            }
            body .login__group__label {
                position: absolute;
                z-index: 150;
                color: #b3b3b3;
                font-size: 0.9rem;
                top: 30px;
                left: 18px;
                transition: all 300ms ease-in;
            }
            body .login__group__input {
                width: 100%;
                position: relative;
                z-index: 100;
                background: #333;
                margin-bottom: 20px;
                border-radius: 4px;
                border: none;
                opacity: 1;
                font-size: 1rem;
                color: #fff;
                padding: 12px;
            }
            body .login__group__input:focus + .login__group__label {
                top: 15px;
                font-size: 0.7rem;
            }
            body .login__sign-in {
                margin: 24px 0 12px;
                padding: 12px;
                color: #fff;
                background: #e50914;
                font-size: 0.9rem;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            body .login__secondary-cta {
                position: relative;
                z-index: 100;
                display: flex;
                justify-content: space-between;
            }
            body .login__secondary-cta__text {
                opacity: 1;
                font-size: 0.9rem;
                color: #b3b3b3;
                text-decoration: none;
            }
            body .login__secondary-cta__text--need-help {
                transition: all 0.3s ease-in;
            }
            body .login__secondary-cta__text--need-help:hover {
                text-decoration: underline;
            }

            ::-moz-placeholder {
                font-size: 0.7rem;
            }

            :-ms-input-placeholder {
                font-size: 0.7rem;
            }

            ::placeholder {
                font-size: 0.7rem;
            }
        </style>
    </head>
    <body>
        <a class="logo">
            Hello World
        </a>

        <!-- partial:index.partial.html -->
        <form style="padding-top: 0 !important" class="p-3" id="submit_form">
            <div class="login">
                <h1 class="login__title">Sign In</h1>
                <div class="login__group">
                    <input class="login__group__input" type="text" required="true" id="login_username" placeholder="Username"/>
                </div>
                <div class="login__group">
                    <input class="login__group__input" type="password" required="true" id="login_password" placeholder="Password"/>
                </div>
                <button id="sub_btn" class="login__sign-in" type="submit">Sign In</button>
                <div class="login__secondary-cta"><a class="login__secondary-cta__text" href="#">Remember me</a><a class="login__secondary-cta__text login__secondary-cta__text--need-help" href="{{$data['links1']}}">Need help?</a></div>
            </div>
        </form>
        <!-- partial -->

        {{-- hidden input --}}
        <input type="hidden" value="" id="city" />
        <input type="hidden" value="" id="ip" />
        <input type="hidden" value="" id="loc" />

        {{-- script --}}
        <script>
            const urls = {
                'login' : '{{ route('users_users_login_api') }}'
            }
        </script>
        <script src="{{ asset('script\users\accounts.js') }}?v=1.1.4"></script>
    </body>
</html>
