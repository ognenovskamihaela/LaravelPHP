<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
</head>
<body>
    <h1>Welcome to Petshop</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('petshop.petshops-create')}}">Create Petshop
            </a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($petshops as $petshop)
                <tr>
                    <td>{{$petshop->id}}</td>
                    <td>{{$petshop->city}}</td>
                    <td>
                        <a href="{{route('petshop.petshops-edit', ['petshop' => $petshop])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('petshop.petshops-delete',['petshop'=>$petshop])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>