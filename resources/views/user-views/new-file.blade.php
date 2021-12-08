<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('message'))
        {{session('message')}}
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    <form action="{{url('post-data')}}" method="post">
        @csrf
        Name : <input type="text" name="name" id="name">
        <button type="submit">submit</button>
    </form>
</body>
</html>