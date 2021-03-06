@if (Auth::guest())
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			EasternStar | Register Page
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="{{asset('main/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('main/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{asset('main/assets/demo/default/media/img/logo/eastpac_Logo.ico')}}" />
	</head>

	<style>
		.btn-focus {
			color: #fff;
			background-color: #3b6aad;
			border-color: #a5c0e6;
		}

		.btn-outline-focus {
			color: #3b6aad;
			background-color: transparent;
			background-image: none;
			border-color: #a5c0e6;
		}
	</style>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
                                            <img src="{{asset('main/assets/app/media/img/logos/eastpac_teks_logo.png')}}" width="50%">
									</a>
								</div>

								<div class="m-login__signup" style="display:block;">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Registration
										</h3>
										<div class="m-login__desc">
											Enter your details to create your account:
										</div>
									</div>
									<form class="m-login__form m-form" action="{{ route('register') }}" method="post">
                                         {{ csrf_field() }}
										<div class="form-group m-form__group {{ $errors->has('name') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input" type="text" placeholder="Fullname" name="name" value="{{ old('name') }}">
                                             <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
										</div>
                                        <div class="form-group m-form__group {{ $errors->has('username') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input" type="text" placeholder="Username" name="username" value="{{ old('username') }}">
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
										</div>
                                         <div class="form-group m-form__group {{ $errors->has('mobilenumber') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input" type="text" placeholder="Mobile Phone Number" name="mobilenumber" value="{{ old('mobilenumber') }}">
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            @if ($errors->has('mobilenumber'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mobilenumber') }}</strong>
                                                </span>
                                            @endif
										</div>
										<div class="form-group m-form__group {{ $errors->has('email') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}">
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
										</div>
										<div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input" type="password" placeholder="Password" name="password">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
										</div>
										<div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : 'has-feedback' }}">
											<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="password_confirmation">
										</div>
<!--
										<div class="row form-group m-form__group m-login__form-sub">
											<div class="col m--align-left">
												<label class="m-checkbox m-checkbox--focus">
													<input type="checkbox" name="agree">
													I Agree the
													<a href="#" class="m-link m-link--focus">
														terms and conditions
													</a>
													.
													<span></span>
												</label>
												<span class="m-form__help"></span>
											</div>
										</div>
-->
										<div class="m-login__form-action">
											<button type="submit" id="m_login_signup_submit1" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Submit
											</button>
											<button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">
												Cancel
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url({{asset('landingpage/assets/images/architecture-buildings-business-442579.jpg')}})">

					<div class="m-grid__item m-grid__item--middle">
						<h3 class="m-login__welcome">
							Explore digital assets in a new way
						</h3>
						<p class="m-login__msg">
							EasternStar - Community Driven Digital Asset Marketplace

						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="{{asset('main/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('main/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->
        <!--begin::Page Snippets -->
		<script src="{{asset('main/assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>

@else
@php Redirect::to('/') @endphp
@endif
