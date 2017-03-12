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
                            <!-- <button type="submit">Yes</button> -->
                            <input class="btn btn-primary btn-block" type="submit" value="Aajaa">

                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
