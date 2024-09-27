<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Installer</title>
</head>
<body>
    <h1>Create New Installer</h1>

    <form action="{{ route('installers.store') }}" method="POST">
        @csrf
        <label for="business_name">Business Name:</label>
        <input type="text" id="business_name" name="business_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label for="website_url">Website URL:</label>
        <input type="url" id="website_url" name="website_url" required><br><br>

        <label for="address_1">Address 1:</label>
        <input type="text" id="address_1" name="address_1" required><br><br>

        <label for="address_2">Address 2:</label>
        <input type="text" id="address_2" name="address_2"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="county">County:</label>
        <input type="text" id="county" name="county" required><br><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Pending">Pending</option>
            <option value="Active">Active</option>
            <option value="Disabled">Disabled</option>
        </select><br><br>

        <button type="submit">Create Installer</button>
    </form>

    <a href="{{ route('installers.index') }}">Back to Installers List</a>
</body>
</html>
