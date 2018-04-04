@extends('admin.auth.template')
@section('title')
  Admin Authentication
@endsection
@section('content')
  <div class="b-t">
    <div class="center-block w-xxl w-auto-xs p-y-md text-center">
      <div class="p-a-md">
        <h4>Forgot my password</h4>
        <p class="text-muted m-y">Enter your email below and we will send you instructions on how to change your password.</p>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('status'))
            <div class="alert alert-success">
               {{ Session::get('status') }}
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
        <form name="form" data-ui-jp="parsley" action="{{ route('admin.password.request') }}">
          {{csrf_field()}}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <br />
          <button type="submit" class="btn btn-lg black p-x-lg">Send My Instruction</button>
        </form>
        <div class="m-y">
          <div class="m-y"><a href="{{route('admin.login')}}" class="_600">Remember password, proceed to login?</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('styles')
@endsection
@section('scripts')

@endsection
