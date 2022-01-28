@extends('layouts.app')

@section('content')
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="inputEmail">{{ __('Email Address') }}</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="inputPassword">{{ __('Password') }}</label>
                                            </div>
                                            <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                                <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                </label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                @if (Route::has('password.request'))
                                                    <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                                @endif
                                                <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ route('register') }}">Não possui uma conta? Registre-se!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

                    
                
