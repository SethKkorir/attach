<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons</title>
    <style>
        /* Button styles */
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        /* Member button */
        .member-btn {
            background-color: #4CAF50;
            color: white;
        }

        /* Staff button */
        .staff-btn {
            background-color: #008CBA;
            color: white;
        }

        /* Report button */
        .report-btn {
            background-color: #f44336;
            color: white;
        }

        /* Button hover effect */
        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <!-- Member button -->
    <button class="button member-btn">Members</button>

    <!-- Staff button -->
    <button class="button staff-btn">Staff</button>

    <!-- Report button -->
    <button class="button report-btn" a>Reports</button>
</body>
</html>
