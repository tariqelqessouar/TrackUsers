@extends('layouts.auth')

@section('logintitle')
<title>Log in | Track Users</title>
@endsection

@section('emailrecover')
           <div class="auth-full-page-content d-flex p-sm-5 p-4">
              <div class="w-100">
                <div class="d-flex flex-column h-100">
                  <div class="mb-4 mb-md-5 text-center">
                    <a href="{{ route('login') }}" class="d-block auth-logo">
                      <img src="{{ asset('assets/images/logo-sm.svg')}}" alt="" height="28" />
                      <span class="logo-txt">Track Users</span>
                    </a>
                  </div>
                  <div class="auth-content my-auto">
                    <div class="text-center">
                      <h5 class="mb-0">Reset Password</h5>
                      <p class="text-muted mt-2">Reset Password with Track Users.</p>
                    </div>
                    <div
                      class="alert alert-success text-center my-4"
                      role="alert"
                    >
                      Enter your Email and instructions will be sent to you!
                    </div>
                    <form
                      class="mt-4"
                      method="POST"
                      action="{{ route('password.email') }}"
                    >
                      @csrf
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                          type="text"
                          class="form-control 
                           @error('email') is-invalid @enderror"
                          id="email"
                          placeholder="Enter email"
                          type="email"
                          name="email"
                          value="{{ old('email') }}"
                          required
                          autocomplete="email"
                          autofocus
                        />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3 mt-4">
                        <button
                          class="btn btn-primary w-100 waves-effect waves-light"
                          type="submit"
                        >
                          Reset
                        </button>
                      </div>
                    </form>

                    <div class="mt-5 text-center">
                      <p class="text-muted mb-0">
                        Remember It ?
                        <a
                          href="{{ url('/home') }}"
                          class="text-primary fw-semibold"
                        >
                          Sign In
                        </a>
                      </p>
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
@endsection

