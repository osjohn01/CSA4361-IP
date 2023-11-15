<?php

session_start();
	$amt = 4500;
	$cc = 5;	
	$cm_user_id = 1;
	$p_st = "Completed";
		include_once("db.php");

		// Fetch cart items for the user
		$sql = "SELECT p_id, qty FROM cart WHERE user_id = '$cm_user_id'";
		$query = mysqli_query($con, $sql);
		$sql = "INSERT INTO orders (user_id, product_id, qty, trx_id, p_status) values(1, 3,1, 132651, 'Completed')";
			mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Your existing head content -->
</head>
<body>
    <!-- Your existing HTML content -->

    <script>
        // Display a success message
        alert("Order successful!");

        setTimeout(function() {
            window.location.href = 'profile.php';
        }, 1000); // Adjust the delay time as needed
    </script>
</body>
</html>

