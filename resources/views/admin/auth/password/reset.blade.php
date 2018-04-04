@extends('admin.auth.template')
@section('title')
  Admin Authentication
@endsection
@section('content')
  <div class="b-t">
    <div class="center-block w-xxl w-auto-xs p-y-md text-center">
      <div class="p-a-md">
        <h4>Authorised Personel Only</h4>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning">
                {!! session('error') !!}
            </div>
        @endif
        @if (session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif
        <form name="form" data-ui-jp="parsley" action="{{ route('admin.password.submit') }}">
          {{csrf_field()}}
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ $email or old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
           </div>
           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" class="form-control" placeholder="New Password" name="password"  required autofocus>
              @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
             @endif
           </div>
           <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"  required autofocus>
              @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
              @endif
           </div>

          <button type="submit" class="btn btn-lg black p-x-lg">Sign me in</button>
        </form>
        <div class="m-y">
          <div class="m-y"><a href="{{route('admin.password.email')}}" class="_600">Forgot password?</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('styles')
@endsection
@section('scripts')

@endsection
