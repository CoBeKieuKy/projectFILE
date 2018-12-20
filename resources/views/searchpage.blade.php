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

            @if (count($posts) > 0)
                @foreach($posts as $post)
                    <div class="col-xs-3 col-xs-offset-2">
                        <br><br><br>
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
                                    <li><strong>Score: {{$post->diem}} (Rank: #{{$post->xephang}})</strong></li>
                                    <br>
                                    <li><strong>Rating: {{$post->luuy}}</strong></li>
                                    <br>
                                            <form action="{{url('home/searchpage')}}" method="get" class="form-horizontal">
                                                <form action="/detail" method="get">
                                                    <?php $showvalue = 'showmorebut'.$post->msphim; ?>
                                                    <button type="submit" name="searchpagebut" value="<?php echo $showvalue; ?>" class="btn btn-primary">More details</button>
                                                </form>
                                            </form>
                                </ul>
                            </div>
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
    </div>
</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://localhost/project1.0/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>