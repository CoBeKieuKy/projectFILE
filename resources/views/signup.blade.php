<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equfv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Management alpha</title>
    <link href="http://localhost/project1.0/public/image/hust.png" rel="icon">
    <link href="http://localhost/project1.0/public/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/project1.0/public/css/design.css" rel="stylesheet" type="text/css" >


</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <header><img src="http://localhost/project1.0/public/image/myanimelist-logo.jpg" height=500px></header>
        </div>
        <div class="col-xs-12">
            <div class="topnav">
                <a class="active" href="../home">HOME PAGE</a>
                <a href="../home/about">ABOUT US</a>
                <a href="../home/contact">CONTACT</a>
                <a href="../home/signup">SIGN UP</a>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="SEARCH..."/>
                        <button type="submit">Find</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-xs-4 col-xs-offset-4">
            <br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Sign Up</h1>
                </div>
                <div class="panel-body">
                    <form align="center" name="Sign Up" method="post" action="{{url('home/signup')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
                                <input class="form-control" placeholder="Username" name="signup_username" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</span>
                                <input class="form-control" placeholder="Password" name="signup_password" type="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Create An Account">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>