@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group has-feedback">
        <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group has-feedback">
        <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
            <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<div class="row mt-3">
    <div class="col-xs-6">
        <a href="{{ route('password.request') }}">Forgot Password?</a>
    </div>
    <div class="col-xs-6 text-right">
        <a href="{{ route('register') }}">Register</a>
    </div>
</div>
@endsection
