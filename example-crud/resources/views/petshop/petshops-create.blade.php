<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshops</title>
</head>
<body>
    <h1>Enter a New Petshop</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('petshop.store')}}">
        @csrf
        @method('post')
    <div>
        <label for="">City</label>
        <input type="text" name="city" placeholder="Enter a city">
    </div>
    <div>
        <input type="submit" value="Save Petshop">
    </div>
    </form>
</body>
</html>