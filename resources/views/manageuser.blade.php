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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
<div class="container">
    < class="row">
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
                                    Welcome <font color="green">{{session()->get('username')}}</font> &nbsp<span class="caret"></span>
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

        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel-body">
                @include ('errors.503')
                <form action="{{url('home/manageuser')}}" method="get" class="form-horizontal">
                    <div class="input-group">
                        <input type="search" name="searchuser" class="form-control" placeholder="Search user...">
                        <div class="input-group-btn">
                        <button type="submit" name="manageuserpagebut" value="searchuserbut" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>&nbsp;
                            Search
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-xs-12">
            <br><br>
            <div class="panel-footer">
                <table class="table table-bordered table-dark">
                    <thead>
                    <tr class="table-primary">
                        <th>UserID</th>
                        <th>Name</th>
                        <th>Right</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if ($users != null)
                        @if (count($users) > 0)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->msnd}}</td>
                                    <td>{{$user->ten}}</td>
                                    <td>
                                        @if($user->vaitro == 0)
                                            User
                                        @else
                                            Admin
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->vaitro == 0)
                                            <?php $ban = 'ban'.$user->msnd; ?>
                                            <form action="{{url('home/manageuser')}}" method="get">
                                                <button type="submit" name="manageuserpagebut" value="<?php echo $ban; ?>" class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Delete
                                                </button>
                                            </form>
                                            @else
                                            <p>Admin a.k.a GOD can not be delete</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="">
                                <td colspan="4">Waring: There is no user like that!</th>
                            </tr>
                        @endif
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>