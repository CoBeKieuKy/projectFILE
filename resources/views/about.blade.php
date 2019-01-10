<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equfv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Management alpha</title>
    <link href="http://localhost/project1.0/public/image/hust.png" rel="icon">
    <link href="http://localhost/project1.0/public/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/project1.0/public/bootstrap3/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="http://localhost/project1.0/public/css/design1.css" rel="stylesheet" type="text/css">
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
                        @if(session()->exists('uservalue'))
                        <a class="navbar-brand glow" href="../home">YOUR ANIMELIST</a>
                            @else
                            <a class="navbar-brand" href="../home">YOUR ANIMELIST</a>
                        @endif
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
                                    Welcome <font color="green">{{session()->get('username')}}</font>&nbsp<span class="caret"></span>
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


        <div class="col-xs-4">
            <br>
            <div class="panel panel-primary">
                <img src="http://localhost/project1.0/public/image/thanh.jpg" class="img-thumbnail">
                <div class="panel-heading"><h3 class="panel-title">Team Leader - Hoang Cong Thanh</h3></div>
                <div class="panel-body"><p>+)  I'm the team leader of Anime Management Website Project and an amateur coder. I focus on designing front-end of this web and also create the database for it. Feel free to add me on facebook <a href="https://www.facebook.com/hoangcong.thanh.75098" target="_blank"> My Facebook here!</a></p>
                    <p>+)  Some infomation about me:</p>
                    <ul>
                        <li>Gender: Male, 21 :P</li>
                        <li>Job: Student at Hanoi University of Science and Technology, HEDSPI.</li>
                        <li>Hobby: I love coding, watching anime and playing games (especially StarCraft II) in my free time on Steam and Battle.net.<br>
                            I'll be so happy if you can join me and play together (<a href="https://steamcommunity.com/profiles/76561198177649689/" target="_blank">My Steam Account</a>). I also loves cooking and riding bike too (just like some kinds of resting after working)</li>
                        <li>My favourite anime: <a href="https://myanimelist.net/anime/6547/Angel_Beats" target="_blank">Angel Beats</a>,<a href="https://myanimelist.net/anime/9253/Steins_Gate" target="_blank"> Steins;Gate</a>,<a href="https://myanimelist.net/anime/28851/Koe_no_Katachi" target="_"> Koe no Katachi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <br>
            <div class="panel panel-primary">
                <img src="http://localhost/project1.0/public/image/quang.jpg" class="img-thumbnail">
                <div class="panel-heading"><h3 class="panel-title">Team Co-Leader 1 - Tran Ba Quang</h3></div>
                <div class="panel-body">blank : |  ( # He doesn't talk much )
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <br>
            <div class="panel panel-primary">
                <img src="http://localhost/project1.0/public/image/phuong.jpg" class="img-thumbnail">
                <div class="panel-heading"><h3 class="panel-title">Team Co-Leader 2 - Doan Duy Phuong</h3></div>
                <div class="panel-body">+) An inspiring chuunibyou game developer, your very harbinger for the end  of this age, GenCo.
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>