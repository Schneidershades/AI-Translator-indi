@extends('layouts.blank')

@section('stylesheets')
<style>
    #success_message {
        display: none;
    }
</style>
@endsection

@section('content')
<a href="https://www.devnagri.com">
    <span class="devnagri"></span>
</a>
<div class="auth">
    <form method="POST" action="{{route('client.complete.registration')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-12">
                <h4 class="box-title m-b-20">Complete to start your first project</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('company') ? ' has-error' : '' }}">
                    <label class="control-label">Company Name</label>
                    <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required tabindex="3" placeholder="ABC Corp">
                    @if ($errors->has('company'))
                    <small class="help-block">{{ $errors->first('company') }}</small>
                    @endif
                    <span class="error-message hidden">Please enter company name</span>
                </div>
            </div>
        </div>
        <input type="hidden" name="userId" value="{{$userId}}">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('industry') ? ' has-error' : '' }}">
                    <label class="control-label">Industry</label>
                    <select class="form-control custom-select" tabindex="4" name="industry">
                        <option>--Select your Industry--</option>
                        @foreach(__('config.industries') as $industry)
                        <option value="{{$industry}}" {{ old('industry') == $industry ? "selected" : "" }}>
                            {{ $industry }}
                        </option>
                        @endforeach
                    </select>
                    @if ($errors->has('industry'))
                    <small class="help-block">{{ $errors->first('industry') }}</small>
                    @endif
                    <span class="error-message hidden">Please choose industry</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('company') ? ' has-error' : '' }}">
                    <label class="control-label">Phone</label>
                    <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required tabindex="6" placeholder="e.g. 9999999999">
                    @if ($errors->has('number'))
                    <small class="help-block error">{{ $errors->first('number') }}</small>
                    @endif
                    <span class="error-message hidden">Please enter phone</span>
                </div>
            </div>
        </div>
        <div class="row form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase auth-button" name="signup" type="submit">Sign Up</button>
                <!-- TODO: add terms and condition page -->
                <p class="m-t-10">By signing up, you agree to our <a href="#">Terms &amp; Condition</a></p>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<!-- <script src="{{ asset('js/formValidation.js')}}"></script> -->
@endsection