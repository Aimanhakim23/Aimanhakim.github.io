<?php
session_start();
$valid_username = "admin@gmail.com";
$valid_password = "1234";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    sleep(1);
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $valid_username && $password === $valid_password) {
        header("Location: dashboard.html");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .login-container {
            background: white;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            overflow: hidden;
            margin: auto;
            max-width: 800px;
            width: 100%;
            padding: 20px;
        }
        .form-section {
            flex: 1;
            padding: 20px;
        }
        .image-section {
            flex: 1;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-section img {
            max-width: 80%;
            height: auto;
        }
        footer {
            background-color: rgb(147, 71, 146);
            text-align: center;
            padding: 1.5rem 0;
            margin-top: auto;
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
        }
        footer span {
            font-size: 0.9rem;
            color: #ffffff;
        }
        footer img {
            max-height: 50px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Form Section -->
        <div class="form-section">
            <h2 class="text-center">Welcome to UiTM Students Profile</h2>
            <form id="loginForm" method="POST">
            <?php if ($error_message): ?>
                <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php endif; ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img src="logo.png" alt="UiTM Logo">
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <img src="footer2.1.png" alt="UiTM Footer Logo">
        <span>© COPYRIGHT UNIVERSITI TEKNOLOGI MARA 2020. All Rights Reserved.</span>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
