<?php 
session_start(); // Start session at the very top
$error = "";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'Robin' && $password == '1234') {
        $_SESSION['activeUser'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        // Use a variable instead of a JS alert for better UI
        $error = "Invalid username or password.";
    }
}
?>

<div class="container mt-4">
    <?php if($error): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-4 float-end">
            Don't have an account? <a href="registration.php">Register Here</a>
        </div>

        <button type="submit" name="login" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>