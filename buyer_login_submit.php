<?php
session_start();
$conn = new mysqli("localhost", "nguttula1", "nguttula1", "nguttula1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buyer_user_id = $_POST['buyer_user_id_login'];
    $buyer_password = $_POST['buyer_password_login'];
    
    // Use prepared statements
    $sql = "select * from buyer_data where buyer_user_id = '$buyer_user_id' and buyer_password = '$buyer_password'";  
    // echo($sql);
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION['user_type'] = 'buyer';
        header("location: buyer_dashboard.php");
    }  
    else{  
        echo "<script>
        alert('Invalid credentials');
        window.location.href = 'loginb.php?error=invalid';
    </script>";
    exit(); 
    } 

}

$conn->close();
?>
