<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    
    <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap.min.css') }}">
    

    <link rel="stylesheet" href="{{ asset('css/frontend_css/login/lib/getmdl-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/login/lib/nv.d3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/login/application.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/login/custom.css') }}">
    <!-- endinject -->

</head>
<body>


<div  class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main style = "background-color: white;" class="mdl-layout__content" >
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div style = "background-color: white;" class="mdl-card__supporting-text color--dark-gray">
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
                    <div class="mdl-grid">
                        <div class="logo">                       
                         <!-- <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone"> -->
                            <a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/core-img/logo.png')}}" alt=""></a>
                            <!-- </div> -->

                        </div>
                         

                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                        <span class="login-name text-color--smoke">Register</span>
                        <span class="login-secondary-text text-color--smoke">Create an account</span>
                        </div>

                        <form id="registerForm" name="registerForm" action="{{ url('/user-register') }}" method="POST">{{ csrf_field() }}
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="name" name="name">
                                <label class="mdl-textfield__label" for="name">Full name</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="email" id="email" name="email">
                                <label class="mdl-textfield__label" for="e-mail">Email</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="password" id="myPassword" name="password">
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>
                           
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                           
                            <div class="mdl-layout-spacer"></div>
                            
                                <input  type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue" value="Sign up">
                                    
                                
                          
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </main>
</div>

<!-- inject:js -->
<script src="{{ asset('js/frontend_js/login/d3.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/getmdl-select.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/material.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/nv.d3.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/layout/layout.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/scroll/scroll.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/charts/discreteBarChart.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/charts/linePlusBarChart.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/charts/stackedBarChart.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/employer-form/employer-form.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/line-chart/line-charts-nvd3.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/map/maps.min.js') }}"></script>

<script src="{{ asset('js/frontend_js/login/widgets/table/table.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/todo/todo.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/popper.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/active.js') }}"></script>
    <script src="{{ asset('js/frontend_js/plugins.js') }}"></script>
    <script src="{{ asset('js/frontend_js/main.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.validate.js') }}"></script>
    <!-- <script src="{{ asset('js/frontend_js/passtrength.js') }}"></script> -->
    <script src="{{ asset('js/frontend_js/easyzoom.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
<!-- endinject -->

</body>
</html>