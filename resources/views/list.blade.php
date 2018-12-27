<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equfv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Management alpha</title>
    <link href="http://localhost/project1.0/public/image/hust.png" rel="icon">
    <link href="http://localhost/project1.0/public/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/project1.0/public/css/design2.css" rel="stylesheet" type="text/css" >
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

        @if (count($list) > 0)

            <div class="col-xs-12">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>YOUR FILM LIST</h1>
                    </div>
                </div>
            </div>

            @foreach($list as $LIST)
                <div class="col-xs-3">
                    <br><br><br>
                    <img src="{{$LIST->poster}}" class="thumbnail" height="300px" width="200px">
                </div>
                <div class="col-xs-9">
                    <br>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h1>{{$LIST->tenphim}}</h1>
                        </div>

                        <div class="panel-body">
                            <ul>
                                <li><strong><font color="white">Aired Date: {{$LIST->ngaycongchieu}}</font> </strong></li>
                                <br>
                                <li><strong><font color="white">Producer: {{$LIST->nsx}}</font></strong></li>
                                <br>
                                <li><strong><font color="white">Episodes: {{$LIST->tap}} eps ({{$LIST->dodai}})</font></strong></li>
                                <br>
                                <li><strong><font color="white">Genres: {{$LIST->tag}}</font></strong></li>
                                <br>
                                <li>
                                    <form action="{{url('home/list')}}" method="get">
                                        <a><font color="red">Status</font></a>
                                        <select name="status">
                                            <option value="0">
                                                @if($LIST->trangthai==1)
                                                    Current Status: Watching
                                                @elseif($LIST->trangthai==2)
                                                    Current Status: Completed
                                                @elseif($LIST->trangthai==3)
                                                    Current Status: On-Hold
                                                @elseif($LIST->trangthai==4)
                                                    Current Status: Dropped
                                                @elseif($LIST->trangthai==5)
                                                    Current Status: Plan to Watch
                                                @else
                                                    Default
                                                @endif
                                            </option>
                                            <option value="1">Watching</option>
                                            <option value="2">Completed</option>
                                            <option value="3">On-Hold</option>
                                            <option value="4">Dropped</option>
                                            <option value="5">Plan to Watch</option>
                                        </select>
                                        &nbsp;
                                        <a><font color="red">My Score</font></a>
                                        <select name="score">
                                            <option value="0">Current Score: {{$LIST->diemnguoidung}}</option>
                                            <option value="10">(10) Masterpiece</option>
                                            <option value="9">(9) Great</option>
                                            <option value="8">(8) Very Good</option>
                                            <option value="7">(7) Good</option>
                                            <option value="6">(6) Fine</option>
                                            <option value="5">(5) Average</option>
                                            <option value="4">(4) Bad</option>
                                            <option value="3">(3) Very Bad</option>
                                            <option value="2">(2) Horrible</option>
                                            <option value="1">(1) Appalling</option>
                                        </select>
                                        <br><br>
                                        <?php $showvalue3 = 'submit'.$LIST->msphim; ?>
                                        <button class="btn btn-primary" name="submitbut" value="<?php echo $showvalue3; ?>">Submit</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            @endforeach
        @else
                <div class="col-xs-12">
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>You still hasn't had any films in your list yet! :|</h1>
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