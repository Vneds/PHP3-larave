@extends('layout')
@section('title') Đăng ký thành viên @endsection
@section('noidungchinh')

<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="/dangnhap">Login</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>sign</h3>
						<form class="row login_form" action="{{url('/dangky')}}" method="post" id="contactForm" novalidate="novalidate">@csrf
							<div class="col-md-12 form-group">
								<input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                                <b class="text-danger"> @error('email') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="mk1" value="{{old('mk1')}}" placeholder="Password">
                                <b class="text-danger"> @error('mk1') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="mk2" value="{{old('mk2')}}" placeholder="Enter the Password">
                                <b class="text-danger"> @error('mk2') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-6 form-group">
								<input type="text" class="form-control" name="ho" value="{{old('ho')}}" placeholder="first name">
                                <b class="text-danger"> @error('ho') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-6 form-group">
								<input type="text" class="form-control" name="ten" value="{{old('ten')}}" placeholder="Name">
                                <b class="text-danger"> @error('ten') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="diachi" value="{{old('diachi')}}" placeholder="Address">
                                <b class="text-danger"> @error('diachi') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="dienthoai" value="{{old('dienthoai')}}" placeholder="Phone">
                                <b class="text-danger"> @error('dienthoai') {{ $message }} @enderror </b>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit"  name="btn" value="submit" class="primary-btn">Sign</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
