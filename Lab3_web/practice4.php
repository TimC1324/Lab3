<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
	<style>
		body {
			background-color: black;
			color: white;
			font-family: sans-serif;
		}
	</style>

    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }

        th, td {
            border: 1px solid white;
            padding: 8px 12px;
            text-align: center;
        }

        th {
            background-color: grey;
        }
    </style>
</head>

<body>
    <h1>Multiplication Table</h1>

    <?php
    // Check if the form was submitted and size is a number
    if (isset($_POST["size"])) {
        $size = intval($_POST["size"]);

        // Validate input: must be > 0
        if ($size <= 0) {
            echo "<p>Please enter a positive integer greater than 0.</p>";
        } else {
            echo "<table>";

            // First row (header)
            echo "<tr><th></th>"; // top-left empty corner
            for ($i = 1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Table rows
            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; // Row header
                for ($col = 1; $col <= $size; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    } else {
        echo "<p>No size entered.</p>";
    }
    ?>
</body>
</html>
