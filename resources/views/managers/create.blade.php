<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Manager</title>
</head>
<body>
    <h1>Create New Manager</h1>

    <form action="{{ route('managers.store') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="Editor">Editor</option>
            <option value="Administrator">Administrator</option>
        </select><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Pending">Pending</option>
            <option value="Active">Active</option>
            <option value="Disabled">Disabled</option>
        </select><br><br>

        <button type="submit">Create Manager</button>
    </form>
    <a href="{{ route('managers.index') }}">Back to Managers List</a>
</body>
</html>
