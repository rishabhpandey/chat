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
        
        <title>Chat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
<body>
    <div class="clearfix" style="margin-top: 87px;">
    <div class="panel-heading">
        <center><h1 style="color:#337ab7;">Local Chat System</h1></center>
    </div>
    <div class="container" >
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title">Please sign in</h3>
                        </div>
                        <div class="panel-body">
                        <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                            <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                            </label>
                            </div>
                            <input class="btn btn-primary btn-block" type="submit" value="Login">
                        </fieldset>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
