<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
    <h1>Employee List</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <div>
        <a href="{{ route('employee.employees-create') }}">Create Employee</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Employee Name</th>
                <th>Last Name</th>
                <th>Salary</th>
                <th>Petshop City</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->surname }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ $employee->petshop->city }}</td>
                    <td>
                        <a href="{{ route('employee.employees-edit', ['employee' => $employee]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('employee.employees-delete', ['employee' => $employee]) }}">
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
