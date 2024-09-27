<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managers</title>
</head>
<body>
    <h1>Managers</h1>
    <a href="{{ route('managers.create') }}">Create New Manager</a>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach($managers as $manager)
        <tr>
            <td>{{ $manager->first_name }}</td>
            <td>{{ $manager->last_name }}</td>
            <td>{{ $manager->email }}</td>
            <td>
                <a href="{{ route('managers.edit', $manager->id) }}">Edit</a> | 
                <form action="{{ route('managers.destroy', $manager->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ url('/') }}">Back to Dashboard</a>
</body>
</html>
