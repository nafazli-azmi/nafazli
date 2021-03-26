@extends('layouts.app')

@section('content')

<div class="login-logo">
    <img src="images/sprm.png"  width="200" height="200" alt="Logo" class="brand-image" style="opacity: 2">
    <!-- <h2>SPPLI@SPRM</h2> -->
    <a href="{{ url('/') }}"><b>SPPLI</b>@SPRM</a>
</div>
  <!-- /.login-logo -->
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register as Admin</p>

     <form action="{{ route('register') }}" method="POST">
        @csrf

      <!-- fill name -->
      <div class="input-group mb-3">
               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

      <!-- fill email -->
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- fill password -->
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                name="password" required autocomplete="new-password" placeholder="Password">

              
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock "></span>
            </div>
          </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
        </div>

        <!-- fill confirm password -->
        <div class="input-group mb-3 ">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror               
          <div class="input-group-append">
            <div class="input-group-text" >
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
          </div>
          <!-- /.col -->
        </div>
     </form>



    </div>
    <!-- /.login-card-body -->
  </div>

@endsection
