<!doctype html>
<html class="no-js')}} lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= {{asset('cpskn/css/bootstrap.min.css')}}>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href={{ url('cpskn/img/favicon.png')}}>
	<!-- Bootstrap CSS -->
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href= {{ asset('cpskn/css/fontawesome-all.min.css')}}>
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href={{asset('cpskn/font/flaticon.css')}}>
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href={{ url('cpskn/style.css')}}>
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<section class="fxt-template-animation fxt-template-layout4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 fxt-bg-wrap">
					<div class="fxt-bg-img" >
						<div class="fxt-header">
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<a href="login-4.html" class="fxt-logo"><img src={{ url('cpskn/img/logo.png')}} alt="Logo"></a>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<h1>Welcome To <br> E-Prescription</h1>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-3">
								<p></p>
							</div>
						</div>
						<ul class="fxt-socials">
							<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="fxt-google fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
							<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							<li class="fxt-youtube fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="youtube"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<label for="email" class="input-label">Email Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								</div>
								<div class="form-group">
									<label for="password" class="input-label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
								</div>
							
								<div class="form-group">
									<button type="submit" class="fxt-btn-fill">
                                        {{ __('Login') }}
                                    </button>
								</div>
							</form>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src={{ asset('cpskn/js/jquery-3.5.0.min.js')}}></script>
	<!-- Popper js -->
	<script src={{ asset('cpskn/js/popper.min.js')}}></script>
	<!-- Bootstrap js -->
	<script src={{ url('cpskn/js/bootstrap.min.js')}}></script>
	<!-- Imagesloaded js -->
	<script src={{ asset('cpskn/js/imagesloaded.pkgd.min.js')}}></script>
	<!-- Validator js -->
	<script src={{ asset('cpskn/js/validator.min.js')}}></script>
	<!-- Custom Js -->
	<script src={{ asset('cpskn/js/main.js')}}></script>

</body>

</html>


