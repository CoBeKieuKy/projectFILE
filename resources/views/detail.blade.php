<!DOCTYPE html>
<html>
<body>

<div>
    @include('errors.503')
</div>
<div>
        @if(count($details) > 0)
            @foreach($details as $detail)
                {{$detail->msphim}}
                {{$detail->tenphim}}
                {{$detail->poster}}
                {{$detail->nsx}}
                {{$detail->luuy}}
            @endforeach
        @else Error
        @endif
</div>
</body>
</html>