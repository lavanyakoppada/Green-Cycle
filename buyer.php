<?php
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jam');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all waste information
$query = "SELECT * FROM waste_info ORDER BY created_at DESC";
$result = mysqli_query($db, $query);

// Close the database connection
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img1.jpg');
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th,td {
            background-color: #f2f2f2;
        }
        h1 {
            color: white; /* Set the color of h1 text to white */
            text-shadow: 2px 2px 0 black, -2px -2px 0 black, 2px -2px 0 black, -2px 2px 0 black; /* Create a black border effect around the text */
            padding: 10px; /* Add padding for spacing */
            text-align: center; /* Center the text */
            /* Optional: Background for better visibility */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Organic Waste Information</h1>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Other Info</th>
                    <th>Wetness (%)</th>
                    <th>Weight (kg)</th>
                    <th>Additional Info</th>
                    <th>Contact Details</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['waste_category']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['waste_type']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['other_info']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['wetness']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['weight']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['additional_info']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['contact_details']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
