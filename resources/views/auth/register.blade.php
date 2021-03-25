@extends('layouts.blank')

@section('stylesheets')
    <style>
        #success_message{ display: none;}
        body {
    background-image: url(/assets/images/background/login-register.jpg);
  overflow-x: hidden !important;
  overflow-y: auto !important;
 }
 .form-group {
    margin-bottom: 5px;
}
.auth form .form-control {
   
    height: 30px;}
    .text-base{font-size: 12px}
    .bootstrap-select.btn-group .dropdown-toggle .filter-option {
    color: #555555;
    font-size: 12px;
}
.dropdown-toggle{padding:5px 12px !important}
.show .dropdown-menu {
    width: 230px;
}
.dropdown-menu > li > a {
    display: block;
    padding: 3px 8px;
    
    font-size: 13px;
}

.auth {width: 40%;
    margin: 5% auto 0 auto;
    border-radius: 5px;
}
@media (max-width: 767.98px) and (min-width: 320px)
{
  .auth {
    width: 80%;}
    .authfy-panel-right{float: left;}

}
@media (max-width: 991.98px) and (min-width: 768px)
{
.auth {
    width: 80%; margin:10% auto 0 auto}
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
       <!-- <div class="row tabs">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center active" id="signup"><b>Client SignUp</b></div>
        </div>-->

        <!-- Signup Form -->

        <form class="form-horizontal form-material" id="registerForm" method="POST" action="{{ url('/register') }}">
            
            <div class="col-sm-12 authfy-panel-right">
    
                <div class="authfy-login">
                   
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label>First Name *</label>
                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus tabindex="1" placeholder="e.g. Aryan">
                        @if ($errors->has('first_name'))
                            <small class="help-block">{{ $errors->first('first_name') }}</small>
                        @endif
                    </span>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label>Last Name *</label>
                        <input id="last_name" type="text" required class="form-control" name="last_name" value="{{ old('last_name') }}" tabindex="2" placeholder="e.g. Kashyap">
                        @if ($errors->has('last_name'))
                            <small class="help-block">{{ $errors->first('last_name') }}</small>
                        @endif
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="form-group {{ $errors->has('company') ? ' has-error' : '' }}">
                        <label>Company</label>
                        <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required tabindex="3" placeholder="ABC Corp">
                        @if ($errors->has('company'))
                            <small class="help-block">{{ $errors->first('company') }}</small>
                        @endif
                    </span>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="{{ $errors->has('industry') ? ' has-error' : '' }}">
                        <label>Industry</label>
                        <select class="selectpicker" tabindex="4" data-style="form-control btn-secondary" name="industry">
                            <option>Select your Industry</option>
                            @foreach(__('config.industries') as $industry)
                                <option
                                        value="{{$industry}}"
                                        {{ old('industry') == $industry ? "selected" : "" }}>
                                    {{ $industry }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('industry'))
                            <small class="help-block">{{ $errors->first('industry') }}</small>
                        @endif
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email *</label>
                        <input id="email2" type="email" class="form-control" name="email" value="{{ old('email') }}" required tabindex="5" placeholder="aryankashyap@gmail.com">
                        @if ($errors->has('email'))
                            <small class="help-block">{{ $errors->first('email') }}</small>
                        @endif
                    </span>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="{{ $errors->has('number') ? ' has-error' : '' }}">
                        <label>Mobile *</label>
                        <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required tabindex="6" placeholder="e.g. 9999999999">
                        @if ($errors->has('number'))
                            <small class="help-block">{{ $errors->first('number') }}</small>
                        @endif
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input id="password2" type="password" tabindex="7" class="form-control" name="password" required placeholder="Min 6 chars...">
                    </span>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span>
                        <label>Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required tabindex="8" placeholder="">
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="subscriber" type="checkbox" name="subscribe" value="{{ old('subscribe', 1) }}" tabindex="5" checked><span class="text-base ml-2">Subscribe to Devnagri newsletters & feeds, deselect the box to avoid newsletters & feeds from Devnagri.</span>
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button class="btn-lg btn-block btn-login" name="signup" type="submit">SignUp</button>
                    <!-- TODO: add terms and condition page
                    <p class="m-t-10">By signing up, you agree to our <a href="#">Terms &amp; Condition</a></p> -->
                </div>
            </div>
        <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center Translatortext">
                    To become a Translator <a href="https://kutumbh.devnagri.com/language" target="_blank"> <strong>Signup here!</strong></a>
                </div>
            </div>
          
            <p class="text-center ortest">OR</p>
 
            <div class="row">
                <div class="m-t-10 text-center">
                    <div class="social">
                        Already have an account? <a href="{{ route('login') }}" style="color:#fff;">Sign in now</a>
                    </div>
                </div>
            </div>
     
            
            

            <!-- <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                    <div class="social">
                        <a href="{{route('social.login',['provider' => 'linkedin'])}}" class="btn  btn-linkedin" data-toggle="tooltip" title="Login with Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="{{route('social.login',['provider' => 'google'])}}" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i class="fab fa-google-plus-g"></i> </a>
                        <a href="{{route('social.login',['provider' => 'github'])}}" class="btn btn-github" data-toggle="tooltip" title="Login with Github"> <i class="fab fa-github-alt"></i> </a>
                    </div>
                </div>
            </div> -->

           
            {{-- <div class="form-group m-b-0">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <p>Already have an account? <a href="{{route('login')}}" class="text-info m-l-5"><b>Sign In</b></a></p>
                </div>
            </div> --}}

                </div></div>
        </form>
    </div>

@endsection


@section('scripts')
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    {{--    {{ dd(\Illuminate\Support\Facades\Request::url()->previous()) }}--}}
    <script type="text/javascript">
        $('document').ready(function(){

            $('#recoverform').hide();
            $('#signup').addClass('active');
        });
        $('#to-recover').on('click',function(){
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
