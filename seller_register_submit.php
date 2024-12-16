<?php
$conn = new mysqli("localhost", "nguttula1", "nguttula1", "nguttula1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seller_name = $_POST['seller_name'];
    $seller_user_id = $_POST['seller_user_id'];
    $seller_email = $_POST['seller_email'];
    $seller_password = $_POST['seller_password'];    
   // $seller_password = password_hash($_POST['seller_password'], PASSWORD_DEFAULT);    
    // Use prepared statements
    $stmt = $conn->prepare("INSERT INTO seller_data (seller_name, seller_user_id, seller_email, seller_password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $seller_name, $seller_user_id, $seller_email, $seller_password);

    try {
        if ($stmt->execute()) {
            echo "Seller Data Inserted successfully!\n";
            echo "<script> window.location.href = 'logins.php'</script>";
        }  else {
            throw new Exception($stmt->error);
        }
    }
    catch(Exception $e) {
        echo "<script>alert('Please check the provided details. Registration or login failed.');</script>";
            echo "<script>window.location.href = 'seller_registration_form.php';</script>";
            exit(); 
    }
    }

$conn->close();
?>
