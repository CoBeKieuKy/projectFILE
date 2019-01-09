<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equfv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Management alpha</title>
    <link href="http://localhost/project1.0/public/image/hust.png" rel="icon">
    <link href="http://localhost/project1.0/public/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/project1.0/public/css/design3.css" rel="stylesheet" type="text/css" >
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
                        @endif                    </div>
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


        <form action="{{url('home/updatefilm')}}" method="get">
        @foreach($details as $detail)
                <div class="col-xs-3">
                    <br><br><br><br>
                    <img src="{{$detail->poster}}" class="thumbnail" height="300px" width="200px">
                </div>
                <div class="col-xs-6">
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1><font color="red">Name</font> </h1>
                            <input type="text" name="name" value="<?php echo $detail->tenphim; ?>" class="form-control">
                        </div>

                        <div class="panel-heading">
                            <ul>
                                <li>
                                    {{'Release Date'}}<input type="text" name="rel" value="<?php echo $detail->ngaycongchieu; ?>" class="form-control">
                                </li>
                                <br>
                                <li>
                                    {{'Producer'}}<input type="text" name="prd" value="<?php echo $detail->nsx; ?>" class="form-control">
                                </li>
                                <br>
                                <li>
                                    {{'Poster URL'}}<input type="text" name="poster" value="<?php echo $detail->poster; ?>" class="form-control">
                                </li>
                                <br>
                                <li>
                                    {{'Episodes'}}<input type="text" name="eps" value="<?php echo $detail->tap; ?>" class="form-control">
                                </li>
                                <br>
                                <li>
                                    {{'Duration'}}<input type="text" name="len" value="<?php echo $detail->dodai; ?>" class="form-control">
                                </li>
                                <br>
                                <li>
                                    {{'Genres'}}<input type="text" name="gen" value="<?php echo $detail->tag; ?>" class="form-control">
                                </li>
                                <br>
                                <li>
                                    {{'Rating'}}<input type="text" name="rat" value="<?php echo $detail->luuy; ?>" class="form-control">
                                </li>
                                <br>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <h2><font color="red">Synopsis</font></h2>
                            <div class="form-group purple-border">
                                <textarea class="form-control" type="text" name="sum" rows="6"><?php echo $detail->noidung; ?></textarea>
                            </div>
                            <button type="submit" name="updatefilmbut" value="<?php echo $detail->msphim ?>" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>&nbsp;Update</button>
                        </div>
                    </div>
                </div>
        @endforeach
        </form>
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>