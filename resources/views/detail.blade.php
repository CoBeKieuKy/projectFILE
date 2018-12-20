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
                <a class="active" href="home">HOME PAGE</a>
                <a href="../home/about">ABOUT US</a>
                <a href="../home/contact">CONTACT</a>
                <a href="../home/signup">SIGN UP</a>
                <a href="../home/login">LOG IN</a>
                <div class="search-container">
                    <form action="{{url('home/searchpage')}}" method="get">
                        <input type="text" name="search" placeholder="SEARCH..."/>
                        <button type="submit" name="searchpagebut" value="searchbut">Find</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            @if (count($details) > 0)
                @foreach($details as $detail)
                    <div class="col-xs-3">
                        <br><br><br><br>
                        <img src="{{$detail->poster}}" class="thumbnail" height="300px" width="200px">
                    </div>
                    <div class="col-xs-9">
                        <br>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1>{{$detail->tenphim}}</h1>
                            </div>

                            <div class="panel-body">
                                <ul>
                                    <li><strong>Aired Date: {{$detail->ngaycongchieu}}</strong></li>

                                    <li><strong>Producer: {{$detail->nsx}}</strong></li>

                                    <li><strong>Episodes: {{$detail->tap}} eps ({{$detail->dodai}})</strong></li>

                                    <li><strong>Score: {{$detail->diem}} (Rank: #{{$detail->xephang}})</strong></li>

                                    <li><strong>Rating: {{$detail->luuy}}</strong></li>

                                    <li><strong>Genres: {{$detail->tag}}</strong></li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <h2><font color="red">Synopsis</font></h2>
                                <p></p><strong><font color="black">{{$detail->noidung}}</font></strong></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>