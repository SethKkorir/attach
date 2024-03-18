<?php
// Fetch data from MySQL for staff
$stmt = $pdo->query("SELECT * FROM staff");
$staff = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Generate staff report content
$report = "Staff Report\n\n";
$report .= "---------------------------------\n";
$report .= "ID\tStaff Number\tUsername\tBranch\n";
$report .= "---------------------------------\n";

foreach ($staff as $member) {
    $report .= "{$member['id']}\t{$member['staff_number']}\t{$member['username']}\t{$member['branch']}\n";
}

// Output the staff report
echo "<pre>$report</pre>";
?>