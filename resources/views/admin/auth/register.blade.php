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
        <form name="form" data-ui-jp="parsley" action="{{route('admin.register')}}">
          {{csrf_field()}}
          <div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="firstname" value="{{old('firstname')}}" placeholder="First Name" required>
              @if ($errors->has('firstname'))
                <small class="help-block">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </small>
              @endif
          </div>
          <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
             <input type="text" class="form-control" name="lastname" value="{{old('lastname')}}" placeholder="Last Name" required>
             @if ($errors->has('lastname'))
                <small class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </small>
            @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
             <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" required>
             @if ($errors->has('email'))
                <small class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </small>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
             <input type="password" class="form-control" name="password" placeholder="Password" required>
             @if ($errors->has('password'))
                <small class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </small>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
             <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
             @if ($errors->has('password_confirmation'))
                <small class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </small>
            @endif
          </div>
          <br />

          <button type="submit" class="btn btn-lg black p-x-lg">Create my account</button>
        </form>
        <div class="m-y">
          <div class="m-y"><a href="{{route('admin.login')}}" class="_600">Already have an account, proceed to login?</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('styles')
@endsection
@section('scripts')

@endsection
