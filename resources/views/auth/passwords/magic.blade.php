@extends('layouts.blank')

@section('stylesheets')
<style>
    #success_message {
        display: none;
    }
</style>
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Magic Link</div>
                <div class="panel-body">
                    @include('_partials.messages')

                    <form class="form-horizontal" method="POST" action="{{ route('magicToken')  }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <label for="email">Email</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <span class="error-message hidden">Please enter email</span>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="checkbox-signup" type="hidden" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase auth-button">
                                        Get Magic Link
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script src="{{ asset('js/formValidation.js')}}"></script> -->
@endsection