
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url("admin_assets/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url("admin_assets/css/sb-admin-2.min.css")}}" rel="stylesheet">

</head>


<body class="">
{{-- 
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="{{route('login.action')}}" method="POST" class="user">

                                        @csrf

                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error )
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>

                                        </div>
                                            
                                        @endif
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror "
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @error('email')
                                                <span class="invalid-feedback">{{$message}}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user   @error('password')is-invalid @enderror"
                                                id="exampleInputPassword" placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback">{{$message}}</span>
                                                @enderror
                                        </div>
                                      
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                      
                                    </form>


                                    
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('register')}}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div> --}}



    <section class="vh-100" style="background-color: ;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="{{route('login.action')}}" method="POST" class="user">

                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        </div>
                            
                        @endif
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #26a300;"></i>
                          <span class="h1 fw-bold mb-0">Nurul Yateem</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example17" class="form-control form-control-lg @error('email')is-invalid @enderror" />
                          <label class="form-label" for="form2Example17">Email address</label>
                          @error('email')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example27" class="form-control form-control-lg @error('password')is-invalid @enderror" />
                          <label class="form-label" for="form2Example27">Password</label>
                          @error('password')
                          <span class="invalid-feedback">{{$message}}</span>
                          @enderror
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('register')}}"
                            style="color: #393f81;">Register here</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url("admin_assets/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{ url("admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url("admin_assets/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url("admin_assets/js/sb-admin-2.min.js")}}"></script>

</body>

</html>