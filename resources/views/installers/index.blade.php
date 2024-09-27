<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installers</title>
</head>
<body>
    <h1>Installers</h1>
    <a href="{{ route('installers.create') }}">Create New Installer</a>
    <table border="1">
        <tr>
            <th>Business Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>
        @foreach($installers as $installer)
        <tr>
            <td>{{ $installer->business_name }}</td>
            <td>{{ $installer->email }}</td>
            <td>{{ $installer->phone_number }}</td>
            <td>
                <a href="{{ route('installers.edit', $installer->id) }}">Edit</a> | 
                <form action="{{ route('installers.destroy', $installer->id) }}" method="POST" style="display:inline-block;">
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
