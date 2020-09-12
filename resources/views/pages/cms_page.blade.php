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
                            <li><a href="{{ asset('products/'.$subcat->url) }}">{{$subcat->name}}</a></li>
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
                            
                        <h2 style="color: #ED7274;margin-top:-5px" class="text-center">{{ $cmsPageDetails->title}}</h2>

                        <p style="padding-top:30px;padding-left:10px;font-size: 18px">{{ $cmsPageDetails->description}}</p>
                    
                    

                    </div>
                   
                    </div>

                </div>
            </div>
            
        </section>

@endsection