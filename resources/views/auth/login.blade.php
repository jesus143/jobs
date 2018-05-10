@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <center>
            <div class="col-md-12">
                <div class="card">


                    <h3>
                        <div class="card-header">{{ __('Login') }}</div>
                    </h3>


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                        <br><br>

                        <div class="col-md-12" style="border: 1px solid #cbc8c8;background-color: #ffffff;text-align:left;padding: 20px;">
                            <h2>Account informations:</h2>
                            <p> Please use this for testing purposes.</p>
                            @php
                                $users =  App\User::all();
                                foreach($users as $user) {
                                echo " email: <b style='color:black'>" . $user->email . "</b>";
                                echo " name: <b style='color:#8d1919' >" . $user->name . "</b>";
                                echo " role: <b style='color:#3262f6' >" . $user->roles()->first()->name . "</b>";
                                echo " passwod : <b style='color:green' >secret</b>";
                                echo "<br>";
                                }
                            @endphp
                        </div>

                    </div>
                    @endsection
                </div>
            </div>
        </center>
    </div>
    <br> <br>
