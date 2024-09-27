<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Manager</title>
</head>
<body>
    <h1>Edit Manager</h1>

    <form action="{{ route('managers.update', $manager->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ $manager->first_name }}" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ $manager->last_name }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $manager->email }}" required><br><br>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="Editor" {{ $manager->role == 'Editor' ? 'selected' : '' }}>Editor</option>
            <option value="Administrator" {{ $manager->role == 'Administrator' ? 'selected' : '' }}>Administrator</option>
        </select><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Pending" {{ $manager->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Active" {{ $manager->status == 'Active' ? 'selected' : '' }}>Active</option>
            <option value="Disabled" {{ $manager->status == 'Disabled' ? 'selected' : '' }}>Disabled</option>
        </select><br><br>

        <button type="submit">Update Manager</button>
    </form>
    <a href="{{ route('managers.index') }}">Back to Managers List</a>
</body>
</html>
