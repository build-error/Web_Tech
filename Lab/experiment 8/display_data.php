<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>User Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
        </tr>
        <?php
            // Read data from text file
            $filename = 'data.txt';
            $file = fopen($filename, 'r');

            if ($file) {
                // Output data into HTML table rows
                while (($line = fgets($file)) !== false) {
                    // Explode line into array using colon as delimiter
                    $data = explode(':', $line);
                    echo '<tr>';
                    foreach ($data as $value) {
                        echo '<td>' . htmlspecialchars(trim($value)) . '</td>';
                    }
                    echo '</tr>';
                }
                fclose($file);
            } else {
                echo '<tr><td colspan="3">Unable to open file!</td></tr>';
            }
        ?>
    </table>
</body>
</html>
