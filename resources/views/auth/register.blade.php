@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-mobile is-half is-offset-one-quarter">
            <div class="panel">
                <p class="panel-heading">
                    Register
                </p>
                <div class="panel-block">
                    <form role="form" style="width: 100%" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label">Name</label>
                            <p class="control">
                                <input name="name" class="input {{ $errors->has('name') ? ' is-danger' : '' }}"
                                       type="text" title="Your Name" value="{{ old('name') }}" required>
                            </p>
                            @if ($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">Email Address</label>
                            <p class="control has-icons-left">
                                <input name="email"
                                       class="input {{ $errors->has('email') ? ' is-danger' : '' }}"
                                       type="text"
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
                            <label class="label">Confirm password</label>
                            <p class="control">
                                <input class="input" type="password" title="Password Confirm" required
                                       name="password_confirmation">
                            </p>
                        </div>

                        <div class="field is-grouped">
                            <p class="control">
                                <button class="button is-primary">Register</button>
                            </p>
                            <p class="control">
                                <a class="button is-link" href="{{ route('login') }}">Already registered?</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
