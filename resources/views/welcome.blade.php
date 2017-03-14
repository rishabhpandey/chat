<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

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

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .chat
            {
              list-style: none;
              margin: 0;
              padding: 0;
            }

            .chat li
            {
              margin-bottom: 10px;
              padding-bottom: 5px;
              border-bottom: 1px dotted #B3A9A9;
            }

            .chat li.left .chat-body
            {
              margin-left: 60px;
            }

            .chat li.right .chat-body
            {
              margin-right: 60px;
            }


            .chat li .chat-body p
            {
              margin: 0;
              color: #777777;
            }

            .panel .slidedown .glyphicon, .chat .glyphicon
            {
              margin-right: 5px;
            }

            .panel-body
            {
              overflow-y: scroll;
              height: 100%;
            }

            ::-webkit-scrollbar-track
            {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              background-color: #F5F5F5;
            }

            ::-webkit-scrollbar
            {
              width: 12px;
              background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb
            {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
              background-color: #555;
            }
        </style>
        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope,$http,$interval) {

                  $scope.submit = function()
                  {
                    $scope.form.user = $('#user1').val()
                    $http.post('chat',$scope.form)
                        .then(function(response){
                                        $scope.form= {};
                      });
                  }
                  $scope.getChat = function()
                  {
                    $http.get('getchat')
                        .then(function(response){
                            $scope.users = response.data;
                      });
                  }

                          $scope.getUsers = function()
                  {
                    $http.get('getUsers')
                        .then(function(response){
                            $scope.allUsers = response.data;
                      });
                  }
                          $scope.getUsers();
                  $scope.getChat();
                  $interval(function() {
                    $scope.getChat();
                }, 1200);
            });
        </script>

    </head>
	<br>
    <body>

        <div class="container" ng-app="myApp" ng-controller="myCtrl" style="background-color:black;">
		<br>
          <div class="row">
            <div class="col-md-5" style="width:50%;">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="javascript:void()" onclick="window.location.reload()"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available(abhi ni bna sale bnd karo isko)</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
                            </span>Busy(abhi ni bna sale bnd karo isko)</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
                                Away(abhi ni bna sale bnd karo isko)</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-off"></span>
                                Sign Out</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <ul class="chat" ng-repeat='user in users'>
                        <img src="http://placehold.it/50/55C1E7/fff&amp;text=U"  alt="User Avatar" >
                        <li class="left clearfix"><span class="chat-img pull-left" ></span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">@{{user.user_name}}</strong> <small class="pull-right text-muted">
                                    <span class="glyphicon glyphicon-time"></span> few seconds ago</small>
                                </div>
                                <p>
                                    @{{user.user_chat}}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <form ng-submit = "submit()">
                    <div class="panel-footer">
                      <div class="input-group">
                        <input id="btn-input" type="text" ng-model="form.chatMsg" class="form-control input-sm" placeholder="Type your message here...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning btn-sm" ng-c id="btn-chat">
                                Send</button>
                        </span>
                      </div>
                    </div>
                </form>
              </div>
            </div>
            <div>
                <div class="panel-body">
                <form ng-submit = "submit()"></form>
                  <ul class="chat">
                    <div class="col-md-5" style="width:50%;" >
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                         <span class="glyphicon glyphicon-comment"></span> Users
                         <div class="btn-group pull-right"></div>
                        </div>
                        <div class="panel-body">
                            <ul class="chat" ng-repeat='user in allUsers'>
                            <div class="chat-body clearfix">
                                <div class="header">
                                 <strong class="primary-font">@{{user.user_name}}</strong> <small class="pull-right text-muted">
                                </div>
                            </div>
                            </ul>
                        </div>
                      </div>
                    </div>
                  </ul>
                </div>
            </div>
          </div>
        </div>

    </body>

</html>
