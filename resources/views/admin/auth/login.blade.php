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
        <form name="form" data-ui-jp="parsley" action="{{route('admin.login')}}">
          {{csrf_field()}}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
             <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" class="form-control" placeholder="Password" name="password" required/>
              @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
          <br />
          <div class="m-b-md">
            <label class="md-check">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i> Keep me signed in
            </label>
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
