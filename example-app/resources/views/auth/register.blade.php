@extends('auth.index')
@section('content')
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
            <h2>Register</h2>
            <p>Well come to NEXT</p>
          </div>
          <div class="mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Name"
              name="username"
              id="username"
            />
          </div>
          <div class="mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Email"
              name="email"
              id="email"
            />
          </div>
          <div class="mb-3">
            <input
              type="password"
              class="form-control"
              placeholder="Password"
              name="password"
              id="password"
            />
          </div>
          <div class="mb-3">
            <input
              type="password"
              class="form-control"
              placeholder="Re-enter password"
              name="re_password"
              id="re_password"
            />
          </div>
          <div class="mb-3">
            <button class="btn btn-lg btn-primary w-100 fs-6">Register</button>
          </div>

          <div class="text-center">
            <small>Already have an account. <a href="/login">Sign In</a></small>
          </div>
        </div>
      </div>
    </div>
@endsection