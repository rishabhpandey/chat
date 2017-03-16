<!DOCTYPE html>
<html>

    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('js/sweetalert-master/dist/sweetalert.css') }}" />
          <script src="{{asset('js/sweetalert-master/dist/sweetalert.min.js') }}"></script>
                <!-- <script src="dist/sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="dist/sweetalert.css"> -->
        <title>Chat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script>
            var app = angular.module('myApp', []);
            app.controller('loginController', function($scope,$http,$interval) {

                $scope.submitLoginForm = function(){
                    $http.post('login',$scope.form)
                        .then(function(response){
                              if(response.data.msg)
                              {
                                  swal(response.data.msg);
                              }else{
                                    window.location.href = "http://localhost/chat/public/chatPage";

                              }

              });
            }
            });
			
        </script>
        <style>
            #wrap{
                background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
                /* Mozilla Firefox */ 
                background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
                /* Opera */ 
                background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
                /* Webkit (Safari/Chrome 10) */ 
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
                /* Webkit (Chrome 11+) */ 
                background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
                /* W3C Markup, IE10 Release Preview */ 
                background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            legend{
                    color:#141823;
                    font-size:25px;
                    font-weight:bold;
            }
            .signup-btn {
                background: #286090;
                background-image: -webkit-linear-gradient(top, #286090, #286090);
                background-image: -moz-linear-gradient(top, #286090, #286090);
                background-image: -ms-linear-gradient(top, #286090, #286090);
                background-image: -o-linear-gradient(top, #286090, #286090);
                background-image: linear-gradient(to bottom, #286090, #286090);
                -webkit-border-radius: 4;
                -moz-border-radius: 4;
                border-radius: 4px;
                text-shadow: 0px 1px 0px #898a88;
                -webkit-box-shadow: 0px 0px 0px #a4e388;
                -moz-box-shadow: 0px 0px 0px #a4e388;
                box-shadow: 0px 0px 0px #a4e388;
                font-family: Arial;
                color: #ffffff;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                border: solid #3b6e22  1px;
                text-decoration: none;
            }       

            .signup-btn:hover {
              background: #286090;
              background-image: -webkit-linear-gradient(top, #286090, #286090);
              background-image: -moz-linear-gradient(top, #286090, #286090);
              background-image: -ms-linear-gradient(top, #286090, #286090);
              background-image: -o-linear-gradient(top, #286090, #286090);
              background-image: linear-gradient(to bottom, #286090, #286090);
              text-decoration: none;
            }
            .navbar-default .navbar-brand{
                            color:#fff;
                            font-size:30px;
                            font-weight:bold;
            }
            .form .form-control { margin-bottom: 10px; }
            @media (min-width:768px) {
                    #home{
                            margin-top:50px;
                    }
                    #home .slogan{
                            color: #0e385f;
                            line-height: 29px;
                            font-weight:bold;
                    }
            }
        </style>
    </head>
    
    <body>
        
        <div ng-app="myApp" class="clearfix" style="margin-top: 87px;" ng-controller="loginController">
        <div class="panel-heading">
           <center><h1 style="color:#337ab7;">Aao Chill<img src="{!! asset('images/metal-horn-emoji.jpg') !!}">Karein</h1></center>
        </div>
        <div class="container" >
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign In kar</h3>
                        </div>
                        <div class="panel-body">
                            <form ng-submit="submitLoginForm()" >
                                <div class="form-group">
                                    <input class="form-control" placeholder="username toh daal" ng-model="form.username" name="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" ng-model="form.password" placeholder="Password (sambhaal k,koi dekh naa le...)" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Yaad rakhiyo bhai
                                </label>
                                </div>
                                
                                <input class="btn btn-primary btn-block" type="submit" value="Aajaa">
                                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            </form>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block" align="center" data-toggle="modal" data-target=".bs-example-modal-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="gridSystemModalLabel">Sign Up(New User)</h4>
                        </div>
                        <div class="modal-body">
                            <div class="" id="wrap">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <form action="" method="post" accept-charset="utf-8" class="form" role="form">   
                                            <h4>It's free and always will be.</h4>
                                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  /> 
                                            <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  /> 
                                            <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                                            <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                                            <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />            
                                            <div class="row">
                                                <br />
                                                <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                                                <button class="btn btn-lg btn-primary signup-btn" type="submit">
                                                Create my account</button>
                                            </div>
                                        </form>
                                    </div>            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </body>
    
</html>
