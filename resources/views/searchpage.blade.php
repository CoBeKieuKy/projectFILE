 <!DOCTYPE html>
<html>
<body>
<div>
    @include('errors.503')
</div>
<form action="{{url('searchpage')}}" method="get" class="form-horizontal">
    <div class="col-md-4">
        <form action="/searchpage" method="get">
            <div class="form-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                            <button type="submit" name="searchpagebut" value="searchbut" class="btn btn-primary">Tim kiem</button>
                        </span>
            </div>
        </form>
    </div>
    <table style="width:100%">
        <tr>
            <th>MSND</th>
            <th>Ten</th>
            <th></th>
        </tr>
        @if (count($posts) > 0)
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->tenphim}}</th>}
                    <th>{{$post->poster}}</th>
                    <th>
                        <form action="{{url('searchpage')}}" method="get" class="form-horizontal">
                            <form action="/detail" method="get">
                                <?php $showvalue = 'showmorebut'.$post->msphim; ?>
                            {{$showvalue}}
                            <button type="submit" name="searchpagebut" value="<?php echo $showvalue; ?>" class="btn btn-primary">Show more</button>
                            </form>
                        </form>
                    </th>
                </tr>
            @endforeach
        @endif
    </table>
</form>

</body>
</html>
