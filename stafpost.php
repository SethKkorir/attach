<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Staff Member</title>
</head>
<body>
    <h2>Add New Staff Member</h2>
    <form action="staff.php" method="POST">
        <label for="staff_number">Staff Number:</label><br>
        <input type="text" id="staff_number" name="staff_number" required><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="registration_datetime">Registration Datetime:</label><br>
        <input type="datetime-local" id="registration_datetime" name="registration_datetime" required><br>

        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status" required><br>

        <label for="branch">Branch:</label><br>
        <input type="text" id="branch" name="branch" required><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>

        <input type="submit" value="Add Staff">
    </form>
</body>
</html>
