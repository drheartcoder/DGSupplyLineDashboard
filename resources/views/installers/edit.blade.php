<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Installer</title>
</head>
<body>
    <h1>Edit Installer</h1>

    <form action="{{ route('installers.update', $installer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="business_name">Business Name:</label>
        <input type="text" id="business_name" name="business_name" value="{{ $installer->business_name }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $installer->email }}" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ $installer->phone_number }}" required><br><br>

        <label for="website_url">Website URL:</label>
        <input type="url" id="website_url" name="website_url" value="{{ $installer->website_url }}" required><br><br>

        <label for="address_1">Address 1:</label>
        <input type="text" id="address_1" name="address_1" value="{{ $installer->address_1 }}" required><br><br>

        <label for="address_2">Address 2:</label>
        <input type="text" id="address_2" name="address_2" value="{{ $installer->address_2 }}"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $installer->city }}" required><br><br>

        <label for="county">County:</label>
        <input type="text" id="county" name="county" value="{{ $installer->county }}" required><br><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" value="{{ $installer->postcode }}" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Pending" {{ $installer->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Active" {{ $installer->status == 'Active' ? 'selected' : '' }}>Active</option>
            <option value="Disabled" {{ $installer->status == 'Disabled' ? 'selected' : '' }}>Disabled</option>
        </select><br><br>

        <button type="submit">Update Installer</button>
    </form>
    <a href="{{ route('installers.index') }}">Back to Installers List</a>
</body>
</html>
