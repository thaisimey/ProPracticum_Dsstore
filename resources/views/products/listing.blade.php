
@extends('layouts.frontLayout.front_design')

@section('content')



<section class="new_arrivals_area section_padding_70 clearfix">
            <div class="container">
                <div class="row">
                
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                               <!--  Side Nav  -->
        <div class="nav-side-menu">
            
                <h6>Categories</h6>
                <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    @foreach($categories as $cat)
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#{{$cat->id}}" class="collapsed active">
                        <a>{{$cat->name}} <span class="arrow"></span></a>
                        
                        <ul class="sub-menu1 collapse" id="{{$cat->id}}">
                            @foreach($cat->categories as $subcat)
                           
                       @if($subcat->status==1)
                            <li><a href="{{ asset('products/'.$subcat->url) }}">{{$subcat->name}}</a>
                           </li>
                             @endif
                          @endforeach
                        </ul>
                       
                    </li>
                    @endforeach
                </ul>
                    
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">
                            	<div class="col-12">
                        <div class="section_heading text-center">
                            
                           <h4> @if(!empty($search_product))
                            {{ $search_product }} Item
                        @else
                            {{ $categoryDetails->name }} Items
                        @endif
                              ({{ count($productsAll) }})
					
                  </h4>
                    </div>
                        @foreach($productsAll as $pro)
                                <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-5 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s"> 
                    
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ asset('/images/backend_images/product/small/'.$pro->image) }}" alt="">
                            <!-- <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview1" > <i class="ti-plus"></i></a>
                            </div>   -->                        
                        </div>
                        
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">$ {{ $pro->price }}</h4>
                            <p>{{ $pro->product_name }}</p>
                            <!-- Add to Cart -->
                            <a href="{{ url('/product/'.$pro->id) }}" class="add-to-cart-btn">ADD TO CART</a>
                        </div>                              
                    </div>
                    @endforeach
                    <div align="center">{{ $productsAll->links()}} </div>
                    </div>

                    
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </section>

@endsection