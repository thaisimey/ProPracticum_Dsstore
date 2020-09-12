<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>

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


<div style="background-color: white;" class="mdl-layout mdl-js-layout  is-small-screen login">
    <main class="mdl-layout__content">
    <div class="mdl-card mdl-card__login mdl-shadow--2dp">
        <div style="background-color: white;" class="mdl-card__supporting-text color--dark-gray">
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

                        <form  id="forgotPasswordForm" name="forgotPasswordForm" action="{{ url('/forgot-password') }}" method="POST">{{ csrf_field() }}
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <span class="mdl-card__title-text text-color--smooth-gray">Forgot Password?</span>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <!-- <span class="login-name text-color--white">Forgot password?</span> -->
                    <span class="login-secondary-text text-color--smoke">Enter your email below to recieve your password</span>
                </div>
                
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" id="email" name="email">
                        <label class="mdl-textfield__label" for="e-mail">Email</label>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                    <div class="mdl-layout-spacer"></div>
                    
                       <input  type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue" value="Send Password">
                   
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
<script src="{{ asset('js/frontend_js/login/widgets/pie-chart/pie-charts-nvd3.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/table/table.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/login/widgets/todo/todo.min.js') }}"></script>
<script src="{{ asset('js/frontend_js/main.js') }}"></script>
<script src="{{ asset('js/frontend_js/jquery.validate.js') }}"></script>
<!-- endinject -->

</body>
</html>