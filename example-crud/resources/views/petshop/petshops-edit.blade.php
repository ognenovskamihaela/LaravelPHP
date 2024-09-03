<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Petshop</title>
</head>
<body>
    <h1>Edit Petshop</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('petshop.petshops-update', ['petshop' => $petshop->id]) }}">
        @csrf
        @method('put')
        <div>
            <label for="city">City</label>
            <input type="text" name="city" placeholder="Enter a city" value="{{ $petshop->city }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
