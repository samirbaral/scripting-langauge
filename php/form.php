<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .login-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .login-form label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background:rgb(255, 38, 0);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }
        .login-form button:hover {
            background:rgb(0, 179, 66);
        }
        .message {
            margin-top: 20px;
            font-size: 1rem;
            color: red;
        }
        .message.success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php
        $validUsername = "admin";
        $validPassword = "password123";

        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if ($username === $validUsername && $password === $validPassword) {
                $message = "<span class='message success'>Login Successful</span>";
            } else {
                $message = "<span class='message'>Invalid Credentials</span>";
            }
        }
        ?>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php
        if (!empty($message)) {
            echo $message;
        }
        ?>
    </div>
</body>
</html>
