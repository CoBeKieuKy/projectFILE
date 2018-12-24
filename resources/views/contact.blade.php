<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equfv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Management alpha</title>
    <link href="http://localhost/project1.0/public/image/hust.png" rel="icon" class="thumbnail">
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
                                    Welcome {{session()->get('username')}}<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../home/list"><span class="glyphicon glyphicon-th-list"></span>&nbsp FILM LIST</a></li>
                                    <div class="dropdown-divider">
                                        <li><a class="dropdown-item" href="../home/logout">&nbsp &nbsp &nbsp<span class="glyphicon glyphicon-log-out"></span>&nbsp LOG OUT</a></li>
                                    </div>
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

        <div class="col-xs-2">
            <br><br><br>
            <img src="http://localhost/project1.0/public/image/hust.png" height=250px width =170px class="thumbnail">
        </div>
        <div class="col-xs-5">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <ul>
                        <li>LEADER'S PHONE NUMBER: 01657599798</li>
                        <li>CO-LEADER'S 1 PHONE NUMBER:	</li>
                        <li>CO-LEADER'S 2 PHONE NUMBER:	</li>
                    </ul>
                </div>
                <br>
                <div class="panel-body">
                    <strong>+) if there is any question you want to ask us! Make your questions then submit<br>
                        them to <a href="https://www.facebook.com/hoangcong.thanh.75098" target="_blank">our leader's facebook page</a>. Or, you can meet us directly at the address showed below:<br>
                    </strong>
                </div>
                <br>
                <div class="panel-footer">
                    <strong><font color="red">ADDR: Room 401, Block D9, Hanoi University of Science and Technology, 1<br>Dai Co Viet Street, Hai Ba Trung District, Ha Noi.</font></strong>
                </div>
            </div>
        </div>
        <div class="col-xs-5">
            <br>
            <img src="http://localhost/project1.0/public/image/bk.jpg" height =300px width=500px class="thumbnail">
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>