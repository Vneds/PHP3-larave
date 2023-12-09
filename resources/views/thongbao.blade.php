@extends('layout')
@section('title') Thông báo @endsection
@section('noidungchinh')
    @if (session()->has('thongbao')==true)
    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
                <div class="alert alert-info h3 text-center text-danger">
                    {{ session()->get('thongbao') }}
                </div>
				</div>
			</div>
		</div>
	</section>
    
    @endif
@endsection
