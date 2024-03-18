<?php
require_once 'config.php';
// Set the content type to JSON
header('Content-Type: application/json');

// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        // Read operation (fetch staff members)
        $stmt = $pdo->query("SELECT * FROM staff");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;
    case 'POST':
        // Create operation (add a new member)
        // $data = json_decode(file_get_contents("php://input"), true);

        $staff_number = $_POST['staff_number'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $registration_date = $_POST['registration_date'];
        $status = $_POST['status'];
        $branch = $_POST['branch'];
        $title = $_POST['title'];
        $creation_datetime = $_POST['creation_datetime'];

        // Check if staff number is provided
        if ($staff_number) {
            // Insert data into the staff table
            $stmt = $pdo->prepare("INSERT INTO staff(staff_number, username, password, registration_date, status, branch, title, creation_datetime) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->execute([$staff_number, $username, $password, $registration_date, $status, $branch, $title, $creation_datetime]);
            echo json_encode(['message' => 'Member added successfully']);
        } else {
            echo json_encode(['error' => 'Staff number cannot be null']);
        }

        break;
}
?>
