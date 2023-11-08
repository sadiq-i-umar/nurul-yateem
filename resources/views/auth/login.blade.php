
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

    <title>Nurul Yateem foundation</title>



<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/vendor/bootstrap/css/bootstrap.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/vendor/animate/animate.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/vendor/animsition/css/animsition.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/vendor/daterangepicker/daterangepicker.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ url("admin_assets/css/main.css")}}">
</head>


<body class="">
  <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url({{asset('admin_assets/images/bg-01.jpg')}});">
                <span class="login100-form-title-1">
                 Welcome Back please Sign In
                </span>
            </div>
            <form class="login100-form validate-form"  action="{{route('login.action')}}" method="POST" >
              @csrf

                        @if ($errors->any())
                        <div style="width:100%" class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        </div>
                            
                        @endif
      
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Email </span>
                    <input class="input100  @error('email')is-invalid @enderror" type="text" name="email" placeholder="Enter Your email address" />
                    <span class="focus-input100"></span>
                    @error('email')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100 @error('password')is-invalid @enderror" type="password" name="password" placeholder="Enter password" />
                    {{-- <span class="focus-input100"></span> --}}
                    @error('password')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" />
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                
                </div>
            
                <div class="container-login100-form-btn">
                    <button type="submit"  style="width: 100%; border-radius:10px; margin-bottom:20px" class="login100-form-btn">
                        Login 
                    </button>
                </div>
                <div>
                  <p class="txt1"> Dont Have an account?  <a href="{{ route('register')}}" class="txt1 ">
                    Create an accont
                   </a></p>
                 
              </div>
            </form>
        </div>
    </div>
</div>

      
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
    <script src="{{ url("admin_assets/vendor/bootstrap/js/popper.js")}}"></script>
    <script src="{{ url("admin_assets/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
  <!--===============================================================================================-->
    <script src="{{ url("admin_assets/vendor/select2/select2.min.js")}}"></script>
  <!--===============================================================================================-->
    <script src="{{ url("admin_assets/vendor/daterangepicker/moment.min.js")}}"></script>
    <script src="{{ url("admin_assets/vendor/daterangepicker/daterangepicker.js")}}"></script>
  <!--===============================================================================================-->
    <script src="{{ url("admin_assets/vendor/countdowntime/countdowntime.js")}}"></script>
  <!--===============================================================================================-->
    <script src="{{ url("admin_assets/js/main.js")}}"></script>

</body>

</html>