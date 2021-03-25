@extends('layouts.blank')

@section('stylesheets')
<style>
#success_message{ display: none;}
</style>
@endsection


@section('content')

    
<span class="devnagri"></span>    
<div class="auth">
    
    @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
    @endif
    <!-- Tabs -->
    

                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        <div class="reset-space"></div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <h3 class="card-title">Reset Password</h3>
                            </div>
                        </div>

                        {{ csrf_field() }}
                        {{-- <div class="col-xs-12">
                        <h3 class="box-title m-b-20">Reset Password</h3>
                        </div> --}}
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <label for="email">Email</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="error-message hidden">Please enter email</span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <label for="password">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="error-message hidden">Please enter password</span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <label for="password-confirm">Confirm Password</label>
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                <span class="error-message hidden">Password not matched</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase auth-button">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                        <div class="reset-space"></div>
                    </form>
                 </div>
@endsection


@section('scripts')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script src="{{ asset('js/formValidation.js')}}"></script> -->
@endsection

