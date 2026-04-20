<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $message = "Signup Successful! <br> Username: $username <br> Email: $email";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>

    <style>
        body {
            font-family: Arial;
            background-color: lightblue;
        }

        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            text-align: center;
            border-radius: 10px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
        }

        .msg {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Sign Up</h2>

    <?php if($message != "") { ?>
        <div class="msg"><?php echo $message; ?></div>
    <?php } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required><br>
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        
        <button type="submit">Sign Up</button>
    </form>
</div>

</body>
</html>