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
            <header><img src="http://localhost/project1.0/public/image/myanimelist-logo.jpg" height="400px"></header>
        </div>

        <div class="col-xs-12">
            <br>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="../home">YOUR ANIMELIST</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../home"><span class="glyphicon glyphicon-home"></span>&nbsp HOME PAGE</a></li>
                        <li><a href="../home/about">ABOUT US</a></li>
                        <li><a href="../home/contact">CONTACT</a></li>
                    </ul>

                    <form class="navbar-form navbar-left" action="{{url('home/searchpage')}}" method="get">
                        <div class="form-group">
                            <input class="form-control" type="text" name="search" placeholder="SEARCH..."/>
                        </div>
                        <button type="submit" name="searchpagebut" value="searchbut" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> </button>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        @if(session()->exists('uservalue'))
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Welcome {{session()->get('username')}}&nbsp<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../home/list"><span class="glyphicon glyphicon-th-list"></span>&nbsp FILM LIST</a></li>
                                    @if(session()->get('userright') == 1)
                                        <li>
                                            <a class="dropdown-item" href="../home/manage">
                                                <span class="glyphicon glyphicon-cog"></span>&nbsp ADMIN MANAGEMENT
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <font color="blue">
                                            <a class="dropdown-item" href="../home/logout">
                                                &nbsp &nbsp &nbsp<span class="glyphicon glyphicon-log-out"></span>&nbsp LOG OUT
                                            </a>
                                        </font>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="../home/login"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
                            <li><a href="../home/signup"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>

        @if( $warn == 1)
            <div class="col-xs-12">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>You have no rights to manage data!!! ><</h1>
                    </div>
                </div>
            </div>

        @else
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Welcome Admin {{session()->get('username')}}</h1>
                </div>

                <div class="panel-body">
                    <form action="{{'manage'}}" method="get">
                        <button type="submit" name="managebut" value="user" class="btn btn-default">
                            <i class="fa fa-plus">User Management</i>
                        </button>
                        <button type="submit" name="managebut" value="film" class="btn btn-default">
                            <i class="fa fa-plus">Film Management</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>