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
                            
                        <h2 style="color: #ED7274;margin-top:-5px;padding-bottom:50px;margin-right: 250px" class="text-center">Contact Us</h2>
                         
                        @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                     @endif
                        @if ($errors->any())
                          <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                        </ul>
                      </div>
                       @endif

                           <div class="row">
                     <div class="col-md-8">
                         <form action="{{ url('/page/contact')}}" method="post">{{ csrf_field() }}
                           <input class="form-control" name="name" placeholder="Name..." /><br />
                           <input class="form-control" name="subject" placeholder="Subject..." /><br />
                           <input class="form-control" name="email" placeholder="E-mail..." /><br />
                           <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea>                   <br />
                           <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
                         </form>
                     </div>
                     <div class="col-md-4">
                       <b>Customer service:</b> <br />
                               Phone: +1 129 209 291<br />
                               E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
                               <br /><br />
                               <b>Headquarter:</b><br />
                               Company Inc, <br />
                               Las vegas street 201<br />
                               55001 Nevada, USA<br />
                               Phone: +1 145 000 101<br />
                               <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />


                               <br /><br />
                               <b>Hong kong:</b><br />
                               Company HK Litd, <br />
                               25/F.168 Queen<br />
                               Wan Chai District, Hong Kong<br />
                               Phone: +852 129 209 291<br />
                               <a href="mailto:hk@mysite.com">hk@mysite.com</a><br />


                             </div>
                           </div>

                       
                       

                    
                    

                    </div>
                   
                    </div>

                </div>
            </div>
            
        </section>

@endsection