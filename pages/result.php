<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
    } else {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div id="content">
        <h1>User Information</h1>

        <label>Name:</label>
        <span><?php echo htmlspecialchars($name); ?></span><br />

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Phone:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br />

        <span>Message:</span><br />
        <span><?php echo htmlspecialchars($message); ?></span><br />
        
    </div>
</body>
</html>