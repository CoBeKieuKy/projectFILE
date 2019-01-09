<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equfv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Animelist</title>
    <link href="http://localhost/project1.0/public/image/hust.png" rel="icon">
    <link href="http://localhost/project1.0/public/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/project1.0/public/css/design1.css" rel="stylesheet" type="text/css" >
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

            @if (count($posts) > 0)
                <div class="col-xs-12">
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>We have found {{count($posts)}} films.</h1>
                        </div>
                    </div>
                </div>

                @foreach($posts as $post)
                    <div class="col-xs-3 col-xs-offset-2">
                        <br><br><br><br><br>
                        <img src="{{$post->poster}}" class="thumbnail" height="300px" width="200px">
                    </div>
                    <div class="col-xs-6">
                        <br>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h1>{{$post->tenphim}}</h1>
                            </div>

                            <div class="panel-body">
                                <ul>
                                    <li><strong>Aired Date: {{$post->ngaycongchieu}}</strong></li>
                                    <br>
                                    <li><strong>Producer: {{$post->nsx}}</strong></li>
                                    <br>
                                    <li><strong>Episodes: {{$post->tap}} eps ({{$post->dodai}})</strong></li>
                                    <br>
                                    <li><strong>Genres: {{$post->tag}}</strong></li>
                                    <br>
                                    <li><strong>Score: {{$post->diem}} (Rank: #{{$post->xephang}})</strong></li>
                                    <br>
                                    <li><strong>Rating: {{$post->luuy}}</strong></li>
                                    <br>
                                    <li class="dropdown">
                                        <button href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                             More &nbsp<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item">
                                                <form action="{{url('home/searchpage')}}" method="get">
                                                    <?php $showvalue = 'showmorebut'.$post->msphim; ?>
                                                    <button type="submit" name="searchpagebut" value="<?php echo $showvalue; ?>" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-info-sign"></span>&nbsp Details
                                                    </button>
                                                </form>
                                                </a>
                                            </li>
                                            @if(session()->exists('uservalue'))
                                                <li>
                                                    <a class="dropdown-item">
                                                        <form method="get" action="{{url('home/searchpage')}}">
                                                            <?php $showvalue2 = 'addbut'.$post->msphim; ?>
                                                            <button type="submit" name="addfilmbut" value="<?php echo $showvalue2; ?>" class="btn btn-primary">
                                                                <span class="glyphicon glyphicon-plus"></span>&nbsp Add to My List
                                                            </button>
                                                        </form>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <div class="col-xs-12">
                    <br><br>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h1>
                                Whoops!!! There is no film like that.
                            </h1>
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