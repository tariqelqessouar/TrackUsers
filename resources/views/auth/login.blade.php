@extends('layouts.auth')

@section('logintitle')
<title>Log in | Track Users</title>
@endsection

@section('login')
            <div class="auth-full-page-content d-flex p-sm-5 p-4">
              <div class="w-100">
                <div class="d-flex flex-column h-100">
                  <div class="mb-4 mb-md-5 text-center">
                    <a href="index.html" class="d-block auth-logo">
                      <img src="assets/images/logo-sm.svg" alt="" height="28" />
                      <span class="logo-txt">Track Users</span>
                    </a>
                  </div>
                  <div class="auth-content my-auto">
                    <div class="text-center">
                      <h5 class="mb-0">Welcome Back !</h5>
                      <p class="text-muted mt-2">
                        Sign in to continue to Track Users.
                      </p>
                      
                    </div>
                    <form method="POST" class="mt-4 pt-2" action="{{ route('login') }}">
                      @csrf
                      <div class="mb-3">
                        <label  class="form-label ">Username</label>
                        <input
                          type="email"
                          class="form-control @error('email') is-invalid @enderror"
                          id="username"
                          placeholder="Enter username"
                          name='email'
                          value="{{ old('email') }}" 
                          required autocomplete="email" 
                        />
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <div class="d-flex align-items-start">
                          <div class="flex-grow-1">
                            <label class="form-label ">Password</label>
                          </div>
                          <div class="flex-shrink-0">
                            <div class="">
                              @if (Route::has('password.request'))
                                    <a class="text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot password?') }}
                                    </a>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="input-group auth-pass-inputgroup">
                          <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Enter password"
                            aria-label="Password"
                            aria-describedby="password-addon"
                            name="password" 
                            required autocomplete="current-password"
                          />
                          <button
                            class="btn btn-light shadow-none ms-0"
                            type="button"
                            id="password-addon"
                          >
                            <i class="mdi mdi-eye-outline"></i>
                          </button>
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="remember-check"
                              name="remember" 
                              {{ old('remember') ? 'checked' : '' }}
                            />
                            <label
                              class="form-check-label"
                              for="remember-check"
                            >
                              Remember me
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <button
                          class="btn btn-primary w-100 waves-effect waves-light"
                          type="submit"
                        >
                          Log In
                        </button>
                        
                      </div>
                    </form>

                    <div class="mt-5 text-center">
                    </div>
                  </div>
                  <div class="mt-4 mt-md-5 text-center">
                    <p class="mb-0">
                      ©
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      ESTA . By EL QESSOUAR
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end auth full page content -->
@endsection