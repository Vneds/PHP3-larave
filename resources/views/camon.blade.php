@extends('layout')
@section('title') Đăng ký thành viên @endsection
@section('noidungchinh')
    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
                <div class="alert alert-info text-center">
                    @if(Session::exists('thongbao'))
                        <h4>{{ Session::get('thongbao') }}</h4> <hr>
                    @endif
                    <a href="/">Về trang chủ</a>
                    </div>
				</div>
			</div>
		</div>
	</section>
@endsection 
