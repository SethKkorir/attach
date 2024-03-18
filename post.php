<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Registration Form</title>
</head>
<body>
    <h2>Membership Registration Form</h2>
    <form action="index.php" method="POST">
        <label for="registration_number">Registration Number:</label>
        <input type="text" name="registration_number" required><br>

        <label for="id_number">ID Number:</label>
        <input type="text" name="id_number" required><br>

        <label for="membership_number">Membership Number:</label>
        <input type="text" name="membership_number" required><br>

        <label for="photo_member">Photo of Member:</label>
        <input type="file" name="photo_member" accept="image/*" required><br>

        <label for="photo_id_front">Photo of ID (Front):</label>
        <input type="file" name="photo_id_front" accept="image/*" required><br>

        <label for="photo_id_back">Photo of ID (Back):</label>
        <input type="file" name="photo_id_back" accept="image/*" required><br>

        <label for="domicile_branch">Domicile Branch:</label>
        <input type="text" name="domicile_branch" required><br>

        <label for="registration_staff_number">Registration Staff Number:</label>
        <input type="text" name="registration_staff_number" required><br>

        <label for="registration_datetime">Registration Datetime:</label>
        <input type="datetime-local" name="registration_datetime" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
