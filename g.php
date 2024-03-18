<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports</title>
</head>
<body>
    <h2>Select Report Type</h2>
    <form action="reports.php" method="POST">
        <label for="report_type">Report Type:</label><br>
        <select id="report_type" name="report_type">
            <option value="members">Members Report</option>
            <option value="staff">Staff Report</option>
        </select><br><br>
        <input type="submit" value="Generate Report">
    </form>
</body>
</html>
