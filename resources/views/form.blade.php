<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    <form action="test" method="post">
        @csrf
        <input type="text" name="name" id="" value="{{old('name')}}">
        <input type="password" name="password" id="" >
        <input type="password" name="password_confirmation" id="" >
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">submit</button>
    </form>
</body>
</html>