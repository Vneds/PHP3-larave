@extends('layout')
@section('title') Giỏ hàng của bạn @endsection
@section('noidungchinh')
@if (isset($cart))

    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delece</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php 
                            $tongtien = 0; $tongsoluong = 0;
                            // Code để hiển thị các sản phẩm trong giỏ 
                            foreach($cart as $c) {
                                $id_sp = $c['id_sp'];            
                                $soluong = $c['soluong'];

                                $ten_sp = \DB::table('sanpham')->where('id_sp', '=', $id_sp)->value('ten_sp');
                                $gia = \DB::table('sanpham')->where('id_sp', '=', $id_sp)->value('gia');
                                $hinh = \DB::table('sanpham')->where('id_sp', '=', $id_sp)->value('hinh');
                                
                                $thanhtien = $gia * $soluong;
                                $tongtien += $thanhtien; 
                                $tongsoluong += $soluong; 
                                $thanhtien = number_format($thanhtien, 0, ',', '.');
                                $gia = number_format($gia, 0, ',', '.');
                                echo '
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="img/cart.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p>'.$ten_sp.'</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>'.$gia.'</h5>
                                        </td>
                                        <td>
                                          <input type="number" value="'.$soluong.'" class="form-control">
                                        </td>
                                        <td>
                                            <h5>$'.$thanhtien.'</h5>
                                        </td>
                                        <td>
                                            <a href="/xoasptronggio/'.$id_sp.'">X</a>
                                        </td>
                                    </tr>';
                            }
        
                            echo '
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="primary-btn" href="#">Apply</a>
                                        <a class="gray_btn" href="#">Close</a>
                                    </div>
                                </td>
                            </tr>
                            
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Subtotal</h5>
                                    </td>
                                    <td>
                                        <h5>$'.number_format($tongtien, 0, ',', '.').'</h5>
                                    </td>
                                </tr>
                                ';
                            @endphp
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: $5.00</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: $10.00</a></li>
                                            <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="/xoagiohang">Delece Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" onclick="history.go(-2)" href="#">back</a>
                                        <a class="primary-btn" href="/thanhtoan">Proceed to checkout</a>
                                        <tr>
                                    </tr>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
@else
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <div class="alert alert-info h3 text-center text-danger">Bạn chưa chọn sản phẩm nào </div>
                </div>
            </div>
        </div>
    </section>
@endif
@endsection
