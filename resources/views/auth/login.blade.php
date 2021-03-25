@extends('layouts.blank')

@section('stylesheets')
    <style>
        #success_message {
            display: none;
        }

        body {
            background-image: url(/assets/images/background/login-register.jpg);
            overflow-x: hidden !important;
            overflow-y: auto !important;
        }

        @media (max-width: 767.98px) and (min-width: 320px) {
            .auth {
                width: 80%;
                margin: 10% auto 0 auto
            }

        }

        @media (max-width: 991.98px) and (min-width: 768px) {
            .auth {
                width: 80%;
                margin: 10% auto 0 auto
            }
        }
    </style>
@endsection


@section('content')


    <div id="main-wrapper" class="auth">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
    @endif
    <!-- Tabs -->

        <!--<div class="row tabs">
            <div class="col-md-12 col-sm-12 text-center active" id="signin"><b>SignIn</b></div>
        </div>-->
        <!-- Signin Form -->
        <form class="form-horizontal form-material" method="POST" id="loginform" action="{{ route('login') }}">


            <div class="col-sm-12 authfy-panel-right">

                <div class="authfy-login ">
                    <div class="brand-logo">
                        <center><a href="https://www.devnagri.com"><img src="/assets/images/background/devnagri.png"
                                                                        class="img-responsive" style="height:40px">
                            </a></center>
                    </div>

                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Email Address</label>
                            <input id="email1" type="email" class="form-control" name="email"
                                   placeholder="e.g aryankashyap@gmail.com" value="{{ old('email') }}" autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                            <span class="error-message hidden">Please enter email</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Password</label>
                            <input id="password1" type="password" class="form-control" name="password" placeholder=""
                                   required>
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                            <span class="error-message hidden">Please enter password</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup"> Remember</label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right forgot"><i
                                    class="fa fa-unlock-alt" aria-hidden="true"></i> Forgot password?</a></div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button class="btn-lg btn-block btn-login" name="signin" type="submit">SignIn</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            Don't have an account? <a href="{{ route('register') }}">Sign up now</a>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center"><a href="{{ route('magicLogin') }}"
                                                                                  class="white-text">Login With Magic
                                Link</a></div>
                    </div>

                    <p class="text-center ortest">OR</p>

                    <div class="row">
                        <div class="m-t-10 text-center">
                            <div class="social">

                                <a href="{{route('social.login',['provider' => 'linkedin'])}}"
                                   class="btn  btn-linked-in" data-toggle="tooltip" title="Login with Linkedin"> <i
                                        class="fab fa-linkedin-in"></i> </a>
                                <a href="{{route('social.login',['provider' => 'google'])}}" class="btn btn-google-plus"
                                   data-toggle="tooltip" title="Login with Google"> <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="{{route('social.login',['provider' => 'github'])}}" class="btn btn-Git-hub"
                                   data-toggle="tooltip" title="Login with Github"> <i class="fab fa-github-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="form-group m-b-0">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <p>Don't have an account? <a href="{{ route('client.register') }}" class="text-info m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </form>
        <!-- Recover Form -->
        <form class="form-horizontal" method="POST" id="recoverform" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3 class="card-title">Recover Password</h3>
                    <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="email3" type="email" class="form-control" name="email" placeholder="Email Address"
                           value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light auth-button"
                            type="submit">Reset
                    </button>
                </div>
            </div>
            <div class="clear-space"></div>
        </form>
    </div>

@endsection


@section('scripts')
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    {{--    {{ dd(\Illuminate\Support\Facades\Request::url()->previous()) }}--}}
    <script type="text/javascript">
        $('document').ready(function () {
            $('#loginform').show();
            $('#recoverform').hide();
            $('#signin').addClass('active');
        });
        $('#to-recover').on('click', function () {
            $('#recoverform').show();
            $('#loginform').hide();
        });
    </script>

    @if ($errors->has('number'))
        <script>
            $('document').ready(function () {
                $('#loginform').hide();
                $('#signin').removeClass('active');
                $('#signup').addClass('active');
                $('#registerForm').show();
            });
        </script>
    @endif

    <script>
        jQuery(document).ready(function () {
            $('.selectpicker').selectpicker();
        });

    </script>
@endsection
