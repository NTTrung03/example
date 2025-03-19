@extends('auth.index')
@section('content')
    {{-- <form id='login-form'>
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="">Register</a> --}}
    <div
      class="container d-flex justify-content-center align-items-center min-vh-100"
    >
      <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <!--  -->
        <div
          class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
          style="background: #e496d9"
        >
          <div class=" ">
            <img src="/001.png" alt="" class="w-100 rounded-4 shadow" />
          </div>
          <p class="text-white fs-2">Todo Verified</p>
          <small class="text-white text-wrap text-center"
            >Join experienced Designers on this platform.</small
          >
        </div>
        <!--  -->
        <div class="col-md-6 form_login">
          <div class="mb-4 text-center">
            <h2>Login</h2>
            <p>Well come to NEXT</p>
            @if ($errors->any())
            <div style="color: red">
              @foreach ($errors->all() as $error )
              <p>{{$error}}</p>
              @endforeach
            </div>
            @endif
          </div>
          <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                name="email"
                id="email"
              />
            </div>
            <div class="mb-1">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                name="password"
                id="password"
              />
            </div>
            <div class="mb-5 d-flex justify-content-between">
              <div class="">
                <input type="checkbox" class="form-check-input" id="formCheck" />
                <label for="form-check" class="form-check-label text-secondary"
                  ><small>Remember Me</small></label
                >
              </div>
              <div class="forgot">
                <small><a href="#">Forgot Password?</a></small>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Login</button>
            </div>
            <div class="mb-3">
              <button class="btn btn-lg btn-light w-100 fs-6">
                <i class="bi bi-google"></i> Sign In with Google
              </button>
            </div>
            <div class="text-center">
              <small>Don't have account? <a href="#">Sign Up</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
