
<?php
require_once 'config.php';
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        // Fetch all member details from the database
        $stmt = $pdo->query("SELECT * FROM members");
        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($members) {
            echo json_encode($members);
        } else {
            echo json_encode(['message' => 'No members found']);
        }
        break;

    case 'POST':
        // POST request handling code you provided
        
            $registration_number = $_POST['registration_number'];
            $id_number = $_POST['id_number'];
            $membership_number = $_POST['membership_number'];
            $photo_member = $_FILES['photo_member']['name'];
            $photo_id_front = $_FILES['photo_id_front']['name'];
            $photo_id_back = $_FILES['photo_id_back']['name'];
            $domicile_branch = $_POST['domicile_branch'];
            $registration_staff_number = $_POST['registration_staff_number'];
            $registration_datetime = $_POST['registration_datetime'];
    
            // Check if the fingerprint is provided
            $fingerprint = $_POST['fingerprint'];
            if ($fingerprint) {
                // Authenticate the fingerprint using the VeriFinger SDK
                $authenticated = authenticateFingerprintWithVeriFinger($fingerprint);
    
                if ($authenticated) {
                    // Insert data into the members table
                    $stmt = $pdo->prepare("INSERT INTO members(registration_number, id_number, membership_number, photo_member, photo_id_front, photo_id_back, domicile_branch, registration_staff_number, registration_datetime) VALUES (?,?,?,?,?,?,?,?,?)");
                    $stmt->execute([$registration_number, $id_number, $membership_number, $photo_member, $photo_id_front, $photo_id_back, $domicile_branch, $registration_staff_number, $registration_datetime]);
    
                    echo json_encode(['message' => 'Member added successfully']);
                } else {
                    echo json_encode(['message' => 'Fingerprint authentication failed']);
                }
            } else {
                echo json_encode(['message' => 'Fingerprint cannot be null']);
            }
            break;
        default:
            echo json_encode(['message' => 'Invalid request method']);
  

            case 'PUT':
                // Assuming you want to update all members' details
        
                // Extract data from the request body
                $data = json_decode(file_get_contents('php://input'), true);
        
                // Update all member details in the database
                $stmt = $pdo->prepare("UPDATE members SET registration_number=?, id_number=?, membership_number=?, photo_member=?, photo_id_front=?, photo_id_back=?, domicile_branch=?, registration_staff_number=?, registration_datetime=?");
                $stmt->execute([
                    $data['registration_number'],
                    $data['id_number'],
                    $data['membership_number'],
                    $data['photo_member'],
                    $data['photo_id_front'],
                    $data['photo_id_back'],
                    $data['domicile_branch'],
                    $data['registration_staff_number'],
                    $data['registration_datetime']
                ]);
        
                echo json_encode(['message' => 'Members updated successfully']);
                break;

    case 'DELETE':
        // Extract data from the request body
        $data = json_decode(file_get_contents('php://input'), true);

        // Check if the ID to delete is provided
        if (isset($data['id'])) {
            $id = $data['id'];

            // Delete the member from the database
            $stmt = $pdo->prepare("DELETE FROM members WHERE id = ?");
            $stmt->execute([$id]);

            // Check if any rows were affected
            if ($stmt->rowCount() > 0) {
                echo json_encode(['message' => 'Member deleted successfully']);
            } else {
                echo json_encode(['message' => 'Member not found']);
            }
        } else {
            echo json_encode(['message' => 'ID is required for deletion']);
        }
        break;
}
?>
