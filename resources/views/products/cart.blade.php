@extends('layouts.frontLayout.front_design')
@section('content')


<section class="cart_area section_padding_100 clearfix">
	
            <div class="container">
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif   
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $total_amount = 0; ?>
                                	@foreach($userCart as $cart)
                                    <tr>
                                        <td class="cart_product_img d-flex align-items-center">
                                            <a href="#"><img src="{{ asset('/images/backend_images/product/small/'.$cart->image) }}" alt="Product"></a>
                                            <h6>{{ $cart->product_name }}</h6>
                                            
                                        </td>
                                        <td class="price"><span>$ {{ $cart->price }}</span></td>
                                        <td class="qty">
                                            <div class="quantity">
                                            	@if($cart->quantity>1)
                                                <a href="{{ url('/cart/update-quantity/'.$cart->id.'/-1') }}"><span class="qty-minus" ><i class="fa fa-minus" aria-hidden="true"></i></span></a>
                                                @endif
                                                <input type="number" class="qty-text" id="qty"  href="#qty"  name="quantity" value="{{ $cart->quantity}}">
                                               <a href="{{ url('/cart/update-quantity/'.$cart->id.'/1') }}"><span  class="qty-plus" ><i class="fa fa-plus" aria-hidden="true"></i></span></a>

                                            </div>
                                        </td>
                                        <td class="total_price"><span>$ {{ $cart->price*$cart->quantity }}</span></td>

                                        <td >
                                    <a class="cart_quantity_delete" href="{{ url('/cart/delete-product/'.$cart->id) }}"><i class="fa fa-times"></i></a>
                                </td>

                                    </tr>

                                    <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
						@endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="{{ url('/') }}">Continue shooping</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                                <a href="#">clear cart</a>
                                <a href="#">Update cart</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cupon code</h5>
                                <p>Enter your cupone code</p>
                            </div>
                            <form action="{{ url('cart/apply-coupon') }}" method="post">{{ csrf_field() }}
                                <input type="search" name="coupon_code" placeholder="#569ab15">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shipping-method-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Shipping method</h5>
                                <p>Select the one you want</p>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Next day delivery</span><span>$4.99</span></label>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Standard delivery</span><span>$1.99</span></label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Personal Pickup</span><span>Free</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span>$<?php echo $total_amount; ?></span></li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                @if(!empty(Session::get('CouponAmount')))
                                
                                <li><span><strong>Total</strong></span> <span><strong>$<?php echo $total_amount - Session::get('CouponAmount'); ?></strong></span></li>
                                @else
                                <li><span><strong>Total</strong></span> <span><strong>$<?php echo $total_amount; ?></strong></span></li>
                                @endif
                            </ul>
                            <a href="{{ url('/checkout') }}" class="btn karl-checkout-btn" style="padding-top: 17px;">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection