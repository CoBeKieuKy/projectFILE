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

        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Welcome Administrator {{session()->get('username')}}</h1>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="panel-body">
                @include('errors.503')

                <form action="{{url('home/managefilm')}}" method="get" class="form-horizontal">
                            <div class="form-group">
                                    <input type="search" name="searchfilm" class="form-control">
                                    <span class="input-group-prepend">
                                        <button type="submit" name="managefilmbut" value="searchfilmbut" class="btn btn-primary">Tim kiem</button>
                                    </span>
                            </div>
                </form>
                        <table style="width:100%">
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            @if ($films != null)
                                @if (count($films) > 0)
                                    @foreach($films as $film)
                                        <tr>
                                            <th>{{$film->tenphim}}</th>
                                            <th>
                                                <form action="{{url('home/managefilm')}}" method="get" class="form-horizontal">
                                                    <?php $update = 'update'.$film->msphim; ?>
                                                    <button type="submit" name="managefilmbut" value="<?php echo $update; ?>" class="btn btn-primary">Update</button>
                                                </form>
                                                <br>
                                                <form method="get" action="{{url('home/managefilm')}}" class="form-horizontal">
                                                    <?php $delete = 'delete'.$film->msphim; ?>
                                                    <button type="submit" name="managefilmbut" value="<?php echo $delete;?>" class="btn btn-primary">Delete</button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <th>There is no film like that!</th>
                                    </tr>
                                @endif
                            @endif
                        </table>
                    </form>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>