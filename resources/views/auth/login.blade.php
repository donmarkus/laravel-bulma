@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-mobile is-half is-offset-one-quarter">
            <div class="panel">
                <p class="panel-heading">
                    Login
                </p>
                <div class="panel-block">
                    <form  style="width: 100%" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label class="label">Email</label>
                                <p class="control has-icons-left">
                                    <input name="email"
                                           class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text"
                                           title="Your Email" value="{{ old('email') }}" required>
                                    <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                        </span>
                                </p>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <label class="label">Password</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}"
                                           type="password"
                                           title="Password" required name="password">
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <p class="control">
                                    <label class="checkbox">
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </p>
                            </div>

                            <div class="field is-grouped">
                                <p class="control">
                                    <button class="button is-primary">Login</button>
                                </p>
                                <p class="control">
                                    <a class="button is-link" href="{{ route('password.request') }}">Forgot Your
                                        Password?</a>
                                </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
