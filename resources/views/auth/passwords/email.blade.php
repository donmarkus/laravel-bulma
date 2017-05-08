@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="column is-half is-offset-one-quarter">
            <div class="panel">
                <p class="panel-heading">
                    Reset Password
                </p>
                <div class="panel-block">
                    <form style="width: 100%" role="form" method="POST" action="{{ route('password.email') }}">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label">Email</label>
                            <p class="control has-icons-left">
                                <input name="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}"
                                       type="text" title="Your Email" value="{{ old('email') }}" required>
                                <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="field is-grouped">
                            <p class="control">
                                <button class="button is-primary">Send Password Reset Link</button>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
