<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee</title>
</head>
<body>
    <h1>Enter New employee</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{ route('employee.store') }}">
        @csrf
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" placeholder="Enter first name">
        </div>
        <div>
            <label for="surname">Last Name</label>
            <input type="text" name="surname" placeholder="Enter last name">
        </div>
        <div>
            <label for="salary">Salary</label>
            <input type="text" name="salary" placeholder="Enter a salary">
        </div>
        <div>
            <label for="petshop_id">Petshop</label>
            <select name="petshop_id" id="petshop_id" required>
                @foreach ($petshops as $petshop)
                    <option value="{{ $petshop->id }}">
                        {{ $petshop->city }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Save Employee">
        </div>
    </form>
</body>
</html>
