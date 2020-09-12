@extends('layouts.frontLayout.front_design')
@section('content')
<section>
    
    <div class="breadcumb_area">
            <div class="container">
                @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block" style="background-color:#d7efe5">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif   
                <div class="row">
                    
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a><i class="icon-angle-right"></i></li>
                            <li class="breadcrumb-item"><a href="#"> Back to Category</a></li>
                        </ol>
                        <!-- btn -->
                        <!-- <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Category</a> -->
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
        <section class="single_product_details_area section_padding_0_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="single_product_thumb">

                            <div class="view-product">
                                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                <a id="mainImgLarge" href="{{ asset('/images/backend_images/product/small/'.$productDetails->image) }}">
                                    <img style="width:450px" id="mainImg" src="{{ asset('/images/backend_images/product/large/'.$productDetails->image) }}" alt="" />
                                </a>
                                </div>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                
                                  <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        @if(count($productAltImages)>0)
                                        <div class="item active thumbnails">
                                                @foreach($productAltImages as $altimg)
                                                    <a href="{{ asset('images/backend_images/product/large/'.$altimg->image) }}" data-standard="{{ asset('images/backend_images/product/small/'.$altimg->image) }}">
                                                        <img class="changeImage" style="width:90px; cursor:pointer" src="{{ asset('images/backend_images/product/small/'.$altimg->image) }}" alt="">
                                                    </a>
                                                @endforeach
                                        </div>
                                        @endif
                                    </div>
                                     </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">

                            <h4 class="title"><a href="#">{{ $productDetails->product_name }}</a></h4>

                            <p>Product Code: {{ $productDetails->product_code }}</p>

                            <h4 class="price">${{ $productDetails->price }}</h4>

                            <p class="available">Available: <span class="text-muted">@if($total_stock>0) In Stock @else Out Of Stock @endif</span></p>

                            <div class="single_product_ratings mb-15">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                             
                            <div class="widget size mb-30">
                            
                                <p><b>Delivery</b></p>
                                <input type="text" name="pincode" class="search_txt" id="chkPincode" placeholder="check pincode" required="">
                                <button type="button" class="search" onclick="return checkPincode();">Go</button>
                                <span id="pincodeResponse"></span>
                               
                                
                            </div>
                            

                            
                           
                            <!-- Add to Cart Form -->
                            <form class="cart clearfix mb-50 d-flex" method="post" name="addtoCartForm" id="addtoCartForm" action="{{ url('add-cart') }}"> {{ csrf_field() }}
                                <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
                                <input type="hidden" name="product_name" value="{{ $productDetails->product_name }}">
                                <input type="hidden" name="product_code" value="{{ $productDetails->product_code }}">
                                <input type="hidden" name="price" id="price" value="{{ $productDetails->price }}">

                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                @if($total_stock>0)
                                <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button>
                                @endif 


                            </form>
                            <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                               
                          <div id="accordion" role="tablist">
                           <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Description</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>{{ $productDetails->description }}</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Free Shipping</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection