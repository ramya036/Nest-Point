<?php
$conn = new mysqli("localhost", "pkoudi1", "pkoudi1", "pkoudi1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM admin_data";
$result = $conn->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Column1</th>
                    <th>Column2</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['Column1'] . "</td>
                    <td>" . $row['Column2'] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found in admin_data table.";
    }
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
