<!DOCTYPE html>
<html>
<body>
    @if(count($errors)>0)
        <div class="alert alert-danger"><strong><font color="blue">WHOOPS!!! THERE IS AN ERROR :|</font></strong>
            <br><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>