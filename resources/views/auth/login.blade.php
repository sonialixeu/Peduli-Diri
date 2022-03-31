<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('img/logopd-no.png') }}" rel="icon">
    <link href="{{ asset('img/logopd-no.png') }}" rel="apple-touch-icon">

    <title>Login Peduli Diri</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    
    <link href="{{ asset('css/signin.css')}}" rel="stylesheet">
  </head>

  <body class="text-center" style="background-image : url('{{asset('img/bg.jpg')}}') " style="background-size : cover" >
  <!-- <div class="card">
          <div class="col-12">
            <img src="{{ asset('img/view-no.png') }}" height="500px" width="600px" alt="" ; background-repeat : no-repeat; background-size : 1300px 680px>
              </div> -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"> 
        
        <div class="pt-4 pb-2">
          
          <img src="{{ asset('img/logopd-no.png') }}" height="89px" width="92px" alt="">
          <h2 class="card-title text-center pb-0 fs-4">Peduli Diri</h2>
          
        </div>
    
        <div class="card mb-3">
          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
              <p class="text-center small">Enter your nik & password to login</p>
            </div>

            <form class="form-signin" method="POST" action="/postlogin">
              @csrf
              {{method_field('POST')}}          
              <div class="form-group">
                <label for="inputNik" class="sr-only">Nama Lengkap</label>
                <input type="text" id="inputNik" class="form-control {{ $errors->has('nik') ? 'is-invalid' : '' }}" name="nik" placeholder="NIK" required value="{{ old('nik') }}">
                @if ($errors->has('nik'))
                <div class="invalid-feedback">
                  {{ $errors->first('nik') }}
                </div>
                @endif
              </div>

              <div class="form-group">
                <label for="InputPassword" class="sr-only">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="InputPassword" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                <div class="invalid-feedback">
                  {{ $errors->first('password') }}
                </div>
                @endif
              </div>
              <div class="col-12">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </div>

              <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html> 