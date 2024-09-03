<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('employee.employees-update', ['employee' => $employee]) }}">
        @csrf
        @method('put')
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="{{ $employee->first_name }}" placeholder="Enter first name">
        </div>
        <div>
            <label for="surname">Last Name</label>
            <input type="text" name="surname" value="{{ $employee->surname }}" placeholder="Enter last name">
        </div>
        <div>
            <label for="salary">Salary</label>
            <input type="int" name="salary" value="{{ $employee->salary }}" placeholder="Enter a salary">
        </div>
        <div>
            <label for="petshop_id">Petshop</label>
            <select name="petshop_id" id="petshop_id" required>
                @foreach ($petshops as $petshop)
                    <option value="{{ $petshop->id }}" {{ $petshop->id == $employee->petshop_id ? 'selected' : '' }}>
                        {{ $petshop->city }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Update Employee">
        </div>
    </form>
</body>
</html>
