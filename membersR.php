<?php
require_once 'config.php'; // Include your database connection configuration

// Fetch data from MySQL
$stmt = $pdo->query("SELECT * FROM members");
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Generate report content
$report = "Member Report\n\n";
$report .= "---------------------------------\n";
$report .= "ID\tRegistration Number\tID Number\tMembership Number\n";
$report .= "---------------------------------\n";

foreach ($members as $member) {
    $report .= "{$member['registration_number']}\t{$member['id_number']}\t{$member['membership_number']}\n";
}

// Output the report
echo "<pre>$report</pre>";

?>
